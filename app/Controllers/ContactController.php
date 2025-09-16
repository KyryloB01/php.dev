<?php


$title = "Contact page";
$breadcrumbs = [
    'title' => "Contact page",
    'link' => "/contact",
];

echo render('contact', compact('title', 'breadcrumbs'));
