<?php

namespace App\Http\Controllers\API\Home;

use App\Models\Caretaker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CaretakerController extends Controller
{
    public function fetch(Request $request)
    {

        $user = auth('sanctum')->user();
        $caretakers = Caretaker::where('is_active', true)->where('user_id', $user->id)->get();

        return response()->json([
            'success' => true,
            'data' => $caretakers,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:200',

            ]
        );

        $caretaker = Caretaker::create([
            'name' =>  $request->name,
            'user_id' =>  Auth::id()
        ]);

        return response()->json([
            'success' => true,
            'message' => 'سر‍‍\رست  با موفقیت ثبت شد ',
            'data' => $caretaker,
        ]);
    }
}
