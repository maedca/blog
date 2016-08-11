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
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
<div class="page-header">
    <h1>@yield('title')</h1>
</div>
<section>
    <div class="flash-overlay-modal">
    @include('flash::message')
        @include('admin.template.partials.errors')
    </div>
    @yield('content')
</section>
    </div>
</div>
<footer>
    @include('admin.template.partials.footer')
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script>
    $('#flash-overlay-modal').modal();
</script>
</body>
</html>


