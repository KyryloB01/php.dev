<?php
declare(strict_types=1);

namespace Models;

use Core\Database\QueryBuilder;

class Category extends QueryBuilder
{
    protected string $table = 'categories';
}
