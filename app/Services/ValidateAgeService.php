<?php

namespace App\Services;

use App\Services\Contracts\ValidateAgeServiceInterface;

class ValidateAgeService implements ValidateAgeServiceInterface
{
    public function validateAge(int $age): string
    {
        if ($age >= 18) {
            return 'Es mayor de edad';
        }
        return 'es menor de edad';
    }
}