<?php

class ContactController
{
    private Response $response;

    public function index(): void
    {
        $title = "Contact page";
        $content = render('contact', compact('title'));

        $this->response = new Response($content);
        $this->response->send();
    }
}
