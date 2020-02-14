<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="routeName" content="{{Route::currentRouteName()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{url('/static/css/admin.css?v='.time())}}">
      <link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">  
    </head>
<body>
    <div class="wrapper">
        <div class="co1">@include('admin.sidebar')</div>
        <div class="co1"></div>
    </div>
</body>
</html>