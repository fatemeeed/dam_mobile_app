<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm()
    {


        return view('admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        $inputs = $request->all();

        // بررسی مقدار موبایل
        if (!isset($inputs['mobile']) || !isset($inputs['password'])) {
            return redirect()->route('admin.login')->withErrors('alert-section-error', 'لطفاً شماره موبایل و رمز عبور را وارد کنید.');
        }

        // تبدیل شماره موبایل از 98 یا +98 به 0
        if (preg_match('/^(\+98|98)9\d{9}$/', $inputs['mobile'])) {
            $inputs['mobile'] = str_replace(['+98', '98'], '0', $inputs['mobile']);
        }


        // dd(Hash::make( $inputs['password']));
        // بررسی ورود
        if (Auth::guard('admin')->attempt([
            'mobile' =>  $inputs['mobile'],
            'password' =>  $inputs['password'],
            'activation' => 1
        ])) {
            $user = Auth::guard('admin')->user();


            if ($user->user_type == 1) {

                // $user->update(['last_active_at' => now()]);
                return redirect()->route('admin.home');
            } else {
                // Auth::guard('admin')->logout();
                return redirect()->back()->with('alert-section-error', 'شماره موبایل یا رمز عبور شما اشتباه است!');
            }
        }


        return redirect()->back()->with('alert-section-error', 'شماره موبایل یا رمز عبور شما اشتباه است!');
    }

    public function logout() {}
}
