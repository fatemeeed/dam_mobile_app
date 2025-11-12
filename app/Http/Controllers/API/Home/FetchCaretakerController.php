<?php

namespace App\Http\Controllers\API\Home;

use App\Models\Caretaker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FetchCaretakerController extends Controller
{
    public function index(Request $request)
    {

        $user = auth('sanctum')->user();
        $caretakers = Caretaker::where('is_active', true)->where('user_id', $user->id)->get();

        return response()->json([
            'success' => true,
            'data' => $caretakers,
        ]);
    }
}
