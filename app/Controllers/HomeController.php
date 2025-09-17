<?php
declare(strict_types=1);

namespace Controllers;

use Response;

class HomeController
{
    public function index()
    {
        $title = "Home page";
        $content = render('home', compact('title'));

        $this->response = new Response($content);
        $this->render($content);
    }

    private function render(string $content): void
    {
        echo $content;
    }
}
