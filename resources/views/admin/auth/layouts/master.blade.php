<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.auth.layouts.head-tag')
    @yield('title')
</head>

<body>

    <section class="back-main-body">
        <section class="vh-100 d-flex justify-content-center align-items-center">
            <section class="main-body">

                <section class="row">
                    <section class="col-md-6 d-flex flex-column ">
                        <section class="logo w-100 mb-3">
                            <img src="{{ asset('auth-assets/img/logo1.png') }}" class="w-25 " alt="">
                        </section>
                        @yield('content')
                    </section>
                    <section class="col-md-6 h-100 W-100  d-none d-md-block">
                        <section class="img ">
                            <img src="{{ asset('auth-assets/img/login.svg') }}" alt="">
                        </section>
                        <section class="d-flex align-items-center justify-content-center text-primary link py-3">
                            <a href="https://novinkarno.ir" target="_blank">درباره ما</a> |
                            <a href="">تماس با ما</a>
                        </section>
                    </section>
                </section>

            </section>

        </section>

    </section>

    @include('admin.auth.layouts.script')
</body>

</html>
