<?php
declare(strict_types=1);

namespace Controllers;

use Core\Http\BaseController;

class AboutController extends BaseController
{
    public function index(): void
    {
        $title = "About page";
        echo $this->view()->render('about', compact('title'));
    }
}
