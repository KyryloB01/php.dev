<?php

class AboutController
{
    private Response $response;

    public function index(): void
    {
        $title = "About page";
        $content = render('about', compact('title'));

        $this->response = new Response($content);
        $this->response->send();
    }
}
