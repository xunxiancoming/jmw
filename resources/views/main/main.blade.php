<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>加盟网首页</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/list.css')}}">
    <script src="{{asset('js/jquery.js')}}"></script>
</head>
<body>
@include('main.header')
@yield('content')
@include('main.footer')
<script src="{{asset('js/ui.js')}}"></script>
</body>
</html>
