@extends('admin.auth.layouts.master')
@section('title')
    <title>ورود کاربران</title>
@endsection

@section('content')
    <section class="login-form w-100 ">

        <fieldset class="border rounded-3 p-3 text-muted mb-5">
            <legend class="float-none w-auto px-3 ">
                <h5 class="text-secondary">ورود | Login</h5>
            </legend>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger font-size-12 w-100" role="alert">{{ $error }}</div>
            @endforeach

            <form action="{{ route('admin.authenticate') }}" method="post" autocomplete="off" name="login_form" class="my-1">
                @csrf

                <div class="form-item">
                    <label for="national_code"> شماره موبایل :</label>
                    <section class="input-item">
                        <input type="text" class="w-100" name="mobile" id="mobile" autocomplete="off"
                            readonly onfocus="this.removeAttribute('readonly');">
                    </section>
                </div>

                <div class="form-item">
                    <label for="login-form-password">رمز عبور:</label>
                    <section class="input-item">
                        <span onclick="togglePass()" id="Layer_1" class="fas fa-eye"></span>
                        <span onclick="togglePass()" id="Layer_2" class="fas fa-eye-slash" hidden></span>
                        <input type="password" id="login-form-password" class="w-100" name="password"
                            autocomplete="new-password" readonly onfocus="this.removeAttribute('readonly');">
                    </section>
                </div>

                <section class="form-input mt-3">
                    <input type="checkbox" name="remember_me" id="">
                    <label for="">مرا به خاطر بسپار</label>
                </section>

                <button type="submit" class="btn btn-primary w-100 mt-2">ورود</button>
            </form>

            
            <a href="">
                <h6>رمز عبور را فراموش کردم!</h6>
            </a>
        </fieldset>


    </section>
@endsection
