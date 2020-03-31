<?php

namespace App\Utilities\PostFilters;

use App\Utilities\QueryFilter;
use App\Utilities\FilterContract;

class Title extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {
        $this->query->where('title', $value);
    }
}
