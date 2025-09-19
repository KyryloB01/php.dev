<?php
declare(strict_types=1);

namespace Controllers;

use Models\Product;
use Core\Http\BaseController;

class ProductController extends BaseController
{
    public function index(): void
    {
        $title = "Products";
        $products = Product::all();
        echo $this->view()->render('products/index', compact('title', 'products'));
    }

    public function create(): void
    {
        $title = "Create Product";
        echo $this->view()->render('products/create', compact('title'));
    }

    public function store(): void
    {
        $name = $_POST['name'];

        // загрузка файла
        $image = null;
        if (!empty($_FILES['image']['name'])) {
            $uploadDir = dirname(__DIR__, 2).'/public/uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $fileName = time().'_'.basename($_FILES['image']['name']);
            $target = $uploadDir.$fileName;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $image = $fileName;
            }
        }

        Product::create([
            'name' => $name,
            'image' => $image
        ]);

        header("Location: /products");
        exit;
    }

    public function edit(int $id): void
    {
        $title = "Edit Product";
        $product = Product::find($id);
        echo $this->view()->render('products/edit', compact('title', 'product'));
    }

    public function update(int $id): void
    {
        $name = $_POST['name'];
        $image = $_POST['old_image'] ?? null;

        if (!empty($_FILES['image']['name'])) {
            $uploadDir = dirname(__DIR__, 2).'/public/uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $fileName = time().'_'.basename($_FILES['image']['name']);
            $target = $uploadDir.$fileName;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $image = $fileName;
            }
        }

        Product::update($id, [
            'name' => $name,
            'image' => $image
        ]);

        header("Location: /products");
        exit;
    }

    public function destroy(int $id): void
    {
        Product::delete($id);
        header("Location: /products");
        exit;
    }
}
