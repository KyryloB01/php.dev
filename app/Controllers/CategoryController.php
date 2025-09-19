<?php
declare(strict_types=1);

namespace Controllers;

use Models\Category; 
use Core\Http\BaseController;

class CategoryController extends BaseController
{
   
    public function index(): void
    {
        $title = "Categories";
        $categories = Category::all(); 
        echo $this->view()->render('categories/index', compact('title', 'categories'));
    }

    public function create(): void
    {
        $title = "Create Category";
        echo $this->view()->render('categories/create', compact('title'));
    }

    public function store(): void
    {
        Category::create([
            'name' => $_POST['name'],
            'image' => $_POST['image']
        ]);
        header("Location: /categories"); 
        exit;
    }

    public function edit(int $id): void
    {
        $title = "Edit Category";
        $category = Category::find($id);
        echo $this->view()->render('categories/edit', compact('title', 'category'));
    }

    public function update(int $id): void
    {
        Category::update($id, [
            'name' => $_POST['name'],
            'image' => $_POST['image']
        ]);
        header("Location: /categories");
        exit;
    }

    public function destroy(int $id): void
    {
        Category::delete($id);
        header("Location: /categories");
        exit;
    }
}
