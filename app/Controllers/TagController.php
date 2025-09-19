<?php
declare(strict_types=1);

namespace Controllers;

use Core\Http\BaseController;
use Models\Tag;

class TagController extends BaseController
{
    public function index(): void
    {
        $model = new Tag();
        $tags = $model->get(); 
        echo $this->view()->render('tags/index', compact('tags'));
    }

    public function create(): void
    {
        echo $this->view()->render('tags/create');
    }

    public function store(): void
    {
        $name = $_POST['name'] ?? '';
        $slug = $_POST['slug'] ?? '';

        $model = new Tag();
        $model->insert([
            'name' => $name,
            'slug' => $slug
        ]);

        header("Location: /tags");
    }
}
