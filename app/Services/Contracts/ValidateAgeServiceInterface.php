<?php

namespace App\Services\Contracts;

interface ValidateAgeServiceInterface
{
    public function validateAge(int $age): string;
}