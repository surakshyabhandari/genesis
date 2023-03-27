<!DOCTYPE html>
<html lang="en">
@include('admin.includes.head')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('admin.includes.header')

        @include('admin.includes.sidebar')

        <div class="content-wrapper">

            @yield('content')

        </div>

         @include('admin.includes.footer')

    </div>

    @include('admin.includes.scripts')
</body>
</html>
