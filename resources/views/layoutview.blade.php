<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/font_icon/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    @yield('head')
</head>
<body>
@yield('body')
</body>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=0dV9jtdFv45lsjN0P4PK9X1R9i4mOUHl"></script>
<script src="/js/BDmap.js"></script>
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/js/showtime.js"></script>
<script src="/js/captcha.js"></script>
<script src="/js/style.js"></script>
</html>
