<!DOCTYPE html>
<html lang="en">
<head>
    <title>Moderna - Bootstrap 3 flat corporate template</title>
    <meta name="description" content="" />

    @include('layouts.styles')

</head>
<body>

<div id="wrapper">
    @include('layouts/header')

    @yield('content')

    @include('layouts/footer')
</div>

<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
@include('sqirips')

</body>
</html>
