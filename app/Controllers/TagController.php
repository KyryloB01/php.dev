<?php
declare(strict_types=1);

namespace Controllers;

use Models\Tag;
use Core\Http\BaseController;

class TagController extends BaseController
{
    public function index(): void
    {
        $title = "Tags";
        $tags = Tag::all();
        echo $this->view()->render('tags/index', compact('title', 'tags'));
    }

    public function create(): void
    {
        $title = "Create Tag";
        echo $this->view()->render('tags/create', compact('title'));
    }

    public function store(): void
    {
        Tag::create([
            'name' => $_POST['name'],
            'slug' => $_POST['slug']
        ]);
        header("Location: /tags");
        exit;
    }

    public function edit(int $id): void
    {
        $title = "Edit Tag";
        $tag = Tag::find($id);
        echo $this->view()->render('tags/edit', compact('title', 'tag'));
    }

    public function update(int $id): void
    {
        Tag::update($id, [
            'name' => $_POST['name'],
            'slug' => $_POST['slug']
        ]);
        header("Location: /tags");
        exit;
    }

    public function destroy(int $id): void
    {
        Tag::delete($id);
        header("Location: /tags");
        exit;
    }
}
