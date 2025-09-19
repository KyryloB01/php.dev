<?php
declare(strict_types=1);

namespace Models;

use Core\Database\QueryBuilder;

class Badge extends QueryBuilder
{
    protected string $table = 'badges';
}
