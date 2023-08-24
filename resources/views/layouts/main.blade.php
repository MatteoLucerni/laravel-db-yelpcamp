<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    @yield('alert')
    <div class="container">
        @include('includes.header')
        @yield('main-content')
        @include('includes.footer')
    </div>
</body>

</html>
