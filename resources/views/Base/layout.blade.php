<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Timber Track</title>
    <!-- script -->
    <script src="{{asset('js/login.js')}}" type="text/javascript"> </script>
    <!-- CSS -->
    <link rel="preload" as="style" onload="this.rel = 'stylesheet'" href="{{asset('css/welcoming.css')}}"
        rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <!-- Styles -->

</head>

<body>
    <div id="container">
        <br>
        <center>
            <div class="container1 pullUp">
                <a href="{{ url('') }}"> HOME</a>
                <a href="{{ url('About') }}"> ABOUT</a>
                <a href="{{ url('Contact') }}"> CONTACT</a>
            </div>
            @yield('body')

    </div>
    <script>
        var modal = document.getElementById('back');
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {

        if (event.target == modal) {
            modal.style.display = "none";
        }
   }
    </script>
</body>

</html>
