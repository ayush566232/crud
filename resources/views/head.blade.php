
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ trans('crud') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">


</head>
<body>
@include('nav')
@yield('content')
@include('footer')
<script type="text/javascript" src="js/jquery-1.8.0.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
