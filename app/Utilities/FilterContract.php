<?php

namespace App\Utilities;

interface FilterContract
{
    public function handle($value): void;
}
