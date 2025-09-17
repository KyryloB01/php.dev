<?php
declare(strict_types=1);

namespace Controllers;

use Response;

class ErrorController
{
    public function index()
    {
        $title = "Error page";
        $content = render('error', compact('title'));

        $this->response = new Response($content);
        $this->render($content);
    }

    private function render(string $content): void
    {
        echo $content;
    }
}
