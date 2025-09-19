<?php

use Controllers\CategoryController;
use Controllers\TagController;
use Controllers\BadgeController;

return [
   
    '/categories' => [CategoryController::class, 'index'],
    '/categories/create' => [CategoryController::class, 'create'],
    '/categories/store' => [CategoryController::class, 'store'],

    '/tags' => [TagController::class, 'index'],
    '/tags/create' => [TagController::class, 'create'],
    '/tags/store' => [TagController::class, 'store'],

    '/badges' => [BadgeController::class, 'index'],
    '/badges/create' => [BadgeController::class, 'create'],
    '/badges/store' => [BadgeController::class, 'store'],
];
