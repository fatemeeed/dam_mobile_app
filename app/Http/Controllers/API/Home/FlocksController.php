<?php

namespace App\Http\Controllers\API\Home;

use App\Http\Controllers\Controller;
use App\Models\Flock;
use Illuminate\Http\Request;

class FlocksController extends Controller
{

    public function index()
    {
        $user=auth('sanctum')->user();
        $flocks=Flock::where('user_id',$user->id)->where('financial_year_id')->get();

        return response()->json([
            'success' => true,
            'data' => $flocks,

        ]);
    }

    public function store()
    {
        
    }
}
