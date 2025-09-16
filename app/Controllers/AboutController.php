<?php


$title = "About page";
$breadcrumbs = [
    'title' => "About page",
    'link' => "/about",
];

echo render('about', compact('title', 'breadcrumbs'));
