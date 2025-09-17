<?php

function render(string $view, array $context = []): string
{
    ob_start(null, 2048);
    $content = template($view, $context);
    $layout = dirname(__DIR__) . '/views/layouts/app.php';
    require $layout;
    return str_replace("{{ content }}", $content, ob_get_clean());
}

function template(string $view, array $context): string
{
    $file = dirname(__DIR__) . "/views/$view.php";

    if (!file_exists($file)) {
        die("View $file not found");
    }

    ob_start();
    extract($context);
    include $file;
    return ob_get_clean();
}

function uri(): string
{
    return parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
}

$request = uri();

require_once dirname(__DIR__) . '/app/Response.php';
require_once dirname(__DIR__) . '/app/Controllers/HomeController.php';
require_once dirname(__DIR__) . '/app/Controllers/AboutController.php';
require_once dirname(__DIR__) . '/app/Controllers/ContactController.php';
require_once dirname(__DIR__) . '/app/Controllers/ErrorController.php';

match ($request) {
    '/' => (new HomeController())->index(),
    '/about' => (new AboutController())->index(),
    '/contact' => (new ContactController())->index(),
    default => (new ErrorController())->index(),
};
