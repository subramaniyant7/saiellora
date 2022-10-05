<!DOCTYPE html>
<html lang="en">

@include('frontend.head')

<body>
    <a id="top"></a>
    @include('frontend.header')

    @yield('content')

    @include('frontend.footer')
</body>

</html>
