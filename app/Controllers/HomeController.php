<?php
declare(strict_types=1);

namespace Controllers;

use Core\Http\BaseController;

class HomeController extends BaseController
{
    public function index(): void
    {
        $title = "Home page";
        echo $this->view()->render('home', compact('title'));
    }
}
