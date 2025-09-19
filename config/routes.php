<?php

use Controllers\CategoryController;
use Controllers\TagController;
use Controllers\BadgeController;

return [

    '/categories' => [CategoryController::class, 'index'],
    '/categories/create' => [CategoryController::class, 'create'],
    '/categories/store' => [CategoryController::class, 'store'],
    '/categories/edit' => [CategoryController::class, 'edit'],
    '/categories/update' => [CategoryController::class, 'update'],
    '/categories/destroy' => [CategoryController::class, 'destroy'],

    '/tags' => [TagController::class, 'index'],
    '/tags/create' => [TagController::class, 'create'],
    '/tags/store' => [TagController::class, 'store'],
    '/tags/edit' => [TagController::class, 'edit'],
    '/tags/update' => [TagController::class, 'update'],
    '/tags/destroy' => [TagController::class, 'destroy'],

    '/badges' => [BadgeController::class, 'index'],
    '/badges/create' => [BadgeController::class, 'create'],
    '/badges/store' => [BadgeController::class, 'store'],
    '/badges/edit' => [BadgeController::class, 'edit'],
    '/badges/update' => [BadgeController::class, 'update'],
    '/badges/destroy' => [BadgeController::class, 'destroy'],
];
