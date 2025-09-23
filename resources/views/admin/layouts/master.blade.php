<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head-tags')
    @livewireStyles
    @yield('head-tag')
    

</head>

<body>
    <input type="text" id="menu-toggle">
    @include('admin.layouts.sidebar')

    <div class="main-content">

        @include('admin.layouts.header')
        @yield('content')

    </div>

 
    @include('admin.layouts.scripts')
    @livewireScripts
    @yield('scripts')

    <section class="toast-wrapper flex-row-reverse">
        @include('alerts.toast.success')
        @include('alerts.toast.error')
    </section>

    @include('alerts.sweetalert.error')
    @include('alerts.sweetalert.success')

</body>

</html>
