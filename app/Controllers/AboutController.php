<?php
declare(strict_types=1);

namespace Controllers;

use Response;

class AboutController
{
    public function index()
    {
        $title = "About page";
        $content = render('about', compact('title'));

        $this->response = new Response($content);
        $this->render($content);
    }

    private function render(string $content): void
    {
        echo $content;
    }
}
