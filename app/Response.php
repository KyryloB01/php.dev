<?php

class Response
{
    protected string $content;
    protected int $status;

    public function __construct(string $content = '', int $status = 200)
    {
        $this->content = $content;
        $this->status = $status;
    }

    public function send(): void
    {
        if (!headers_sent()) {
            http_response_code($this->status);
            header('Content-Type: text/html; charset=utf-8');
        }
        echo $this->content;
    }
}
