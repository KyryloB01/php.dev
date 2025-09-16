<?php


$title = "404 Not Found";
$breadcrumbs = [
    'title' => "Error",
    'link' => "/404",
];

echo render('error', compact('title', 'breadcrumbs'));
