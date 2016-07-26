<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> @yield('title', 'Default') | Panel administrativo</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/estilo.css')}}">
</head>
<body>
@include('admin.template.partials.nav')
<section>
    @yield('content')
</section>

<footer>
    @include('admin.template.partials.footer')
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>


