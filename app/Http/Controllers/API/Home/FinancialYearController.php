<?php

namespace App\Http\Controllers\Api\Home;

use Illuminate\Http\Request;
use App\Models\FinancialYear;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FinancialYearController extends Controller
{
    public function index()
    {
       $user=auth('sanctum')->user();
        $years = FinancialYear::where('user_id', $user->id)->get();

        
        return response()->json([
            'success' => true,
            'data' => $years,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title'       => 'nullable',
                'start_date'  => 'required|date' ,
                'end_date'    => 'required|date|after_or_equal:start_date'
            ]
        );


         $financialYear = FinancialYear::create([
            'user_id' => Auth::id(), // اگر احراز هویت داری
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return response()->json([
             'success' => true,
            'message' => 'سال مالی با موفقیت ثبت شد ',
            'data' => $financialYear,
        ]);



        
    }
}
