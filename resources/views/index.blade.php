<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diagal.kz</title>
    <link rel="stylesheet" href="css/main.css"/>
    <link href="//fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/vendors.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/page">Brand</a>
        </div>
        <ul id="topmenu" class="nav navbar-nav navbar-right">
            @include('site.partials._topmenu')
        </ul>
    </div>
</nav>
<div id="content"></div>

<script type="text/javascript" src="js/diagal.js"></script>
{{--<script type="text/javascript" src="js/vendors.js"></script>--}}
</body>
</html>
