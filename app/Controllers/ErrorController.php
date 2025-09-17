<?php
declare(strict_types=1);

namespace Controllers;

use Core\Http\BaseController;

class ErrorController extends BaseController
{
    public function index(): void
    {
        $title = "Error page";
        echo $this->view()->render('error', compact('title'));
    }
}
