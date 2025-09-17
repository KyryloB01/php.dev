<?php

class ErrorController
{
    private Response $response;

    public function index(): void
    {
        $title = "404 Not Found";
        $content = render('error', compact('title'));

        $this->response = new Response($content, 404);
        $this->response->send();
    }
}
