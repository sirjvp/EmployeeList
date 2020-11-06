<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="assets/css/styles.min.css">

</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: rgb(255,199,0);">
        <div class="container-fluid"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation" style="background-color: rgb(255,199,0);"><a class="nav-link active" href="/employee" style="font-weight: bold;font-style: normal;color: rgba(0,0,0,0.9);font-family: ABeeZee, sans-serif;">EMPLOYEE</a></li>
                    <li class="nav-item" role="presentation" style="background-color: rgb(255,199,0);"><a class="nav-link" href="/company" style="font-weight: bold;font-style: normal;color: rgba(0,0,0,0.9);font-family: ABeeZee, sans-serif;">COMPANY</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>