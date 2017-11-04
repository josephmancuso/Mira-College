<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiraCollege</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top navigation-clean" style="background-color:transparent;">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand" href="/" style="color:#ffffff;">Mira College</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="#">About </a></li>
                    <li role="presentation"><a href="/" style="/*color:#ffffff;*/">Search </a></li>
                    <li role="presentation"><a href="#" style="/*color:#ffffff;*/">Portfolio </a></li>
                    <li role="presentation"><a href="#" style="/*color:#ffffff;*/">Contact </a></li>
                </ul>
            </div>
        </div>
    </nav>

@yield('content')

<footer>
    <script src="/js/jquery.min.js"></script>
    <script src="/dist/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="/js/script.min.js"></script>
    @yield('javascript')
</footer>
</body>

</html>