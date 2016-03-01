<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel='stylesheet' href="https://maxcdn.bootstraprapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
 
        @yield('header')
    </head>
    
    <body>
        <div class="container">
        @yield('content')
        @yield('footer')
        </div>
    </body>
</html>
