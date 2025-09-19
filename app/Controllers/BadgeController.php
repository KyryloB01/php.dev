<?php
declare(strict_types=1);

namespace Controllers;

use Core\Http\BaseController;
use Models\Badge;

class BadgeController extends BaseController
{
    public function index(): void
    {
        $model = new Badge();
        $badges = $model->get(); 
        echo $this->view()->render('badges/index', compact('badges'));
    }

    public function create(): void
    {
        echo $this->view()->render('badges/create');
    }

    public function store(): void
    {
        $title = $_POST['title'] ?? '';

        $model = new Badge();
        $model->insert([
            'title' => $title
        ]);

        header("Location: /badges");
    }
}
