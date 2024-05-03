<?php

namespace App\Http\Controllers;

use App\Services\Contracts\ValidateAgeServiceInterface;
use Illuminate\Http\Request;

class ValidateAgeController extends Controller
{
    public function __construct(private readonly ValidateAgeServiceInterface $validateAgeService)
    {
        
    }
    public function __invoke(Request $request)
    {
        $age = $request->input('age');

        $mesagge = $this->validateAgeService->validateAge($age);

        return response()->json($mesagge);
    }
}
