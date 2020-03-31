<?php

namespace App\Utilities\PostFilters;

use App\Utilities\QueryFilter;
use App\Utilities\FilterContract;

class Category extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {
        $this->query->whereHas('category', function ($q) use ($value) {
            return $q->where('name', $value);
        });
    }
}
