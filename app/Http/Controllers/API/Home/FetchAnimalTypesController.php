<?php

namespace App\Http\Controllers\API\Home;

use App\Models\AnimalType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FetchAnimalTypesController extends Controller
{
    public function index(){
        
        $animalTypes = AnimalType::all();

        return response()->json([
            'success' => true,
            'data' => $animalTypes,
        ]);
    }
}
