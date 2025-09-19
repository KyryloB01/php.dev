<?php
declare(strict_types=1);

namespace Controllers;

use Core\Http\BaseController;
use Models\Category;

class CategoryController extends BaseController
{
    public function index(): void
    {
        $model = new Category();
        $categories = $model->get(); // SELECT * FROM categories
        echo $this->view()->render('categories/index', compact('categories'));
    }

    public function create(): void
    {
        echo $this->view()->render('categories/create');
    }

    public function store(): void
    {
        $name = $_POST['name'] ?? '';
        $image = $_POST['image'] ?? '';

        $model = new Category();
        $model->insert([
            'name' => $name,
            'image' => $image
        ]);

        header("Location: /categories");
    }
}
