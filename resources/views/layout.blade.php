<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{getenv('CLIENT_NAME')}}</title>
    <meta name="description" content="Converse|Get loud, Reach Your Crowd">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{URL::asset('assets/dist/app.min.css?' . md5(getenv('CLIENT_VERSION')))}}" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
        var URL = '{{Request::root()}}';
    </script>
    <script src="{{URL::asset('assets/vendorjs/modernizr-2.6.2.min.js')}}"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>ancient</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="content">
    @yield('content')
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{URL::asset('assets/vendorjs/jquery-1.10.2.min.js')}}"><\/script>')</script>
<script src="{{URL::asset('assets/dist/app.min.js?' . md5(getenv('CLIENT_VERSION')))}}"></script>
</body>
</html>