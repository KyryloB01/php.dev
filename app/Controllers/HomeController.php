<?php


$title = "Home page";
$breadcrumbs = [
    'title' => "Home page",
    'link' => "/",
];

echo render('index', compact('title', 'breadcrumbs'));
