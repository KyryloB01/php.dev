<?php
declare(strict_types=1);

namespace Controllers;

use Models\Badge;
use Core\Http\BaseController;

class BadgeController extends BaseController
{
    public function index(): void
    {
        $title = "Badges";
        $badges = Badge::all();
        echo $this->view()->render('badges/index', compact('title', 'badges'));
    }

    public function create(): void
    {
        $title = "Create Badge";
        echo $this->view()->render('badges/create', compact('title'));
    }

    public function store(): void
    {
        Badge::create([
            'title' => $_POST['title']
        ]);
        header("Location: /badges");
        exit;
    }

    public function edit(int $id): void
    {
        $title = "Edit Badge";
        $badge = Badge::find($id);
        echo $this->view()->render('badges/edit', compact('title', 'badge'));
    }

    public function update(int $id): void
    {
        Badge::update($id, [
            'title' => $_POST['title']
        ]);
        header("Location: /badges");
        exit;
    }

    public function destroy(int $id): void
    {
        Badge::delete($id);
        header("Location: /badges");
        exit;
    }
}
