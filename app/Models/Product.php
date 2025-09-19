<?php
declare(strict_types=1);

namespace Models;

use Core\Database\QueryBuilder;

class Product extends QueryBuilder
{
    protected static string $table = "products";
}
