<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="routeName" content="{{Route::currentRouteName()}}">
    {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
      <!-- bootstrap css -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      {{-- <link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">   --}}
      {{-- <link rel="stylesheet" href="{{url('/static/css/admin.css?v='.time())}}"> --}} 

      <link rel="stylesheet" href="{{asset('/static/css/admin.css?v='.time())}}">
    </head>
<body>
    <div class="wrapper">
        <div class="co1">@include('admin.sidebar')</div>
        <div class="co1"></div>
    </div>
</body>
</html>