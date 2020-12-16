<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="{{asset('js/login.js')}}" type="text/javascript"> </script>
        <!-- Fonts -->
        @yield('css')
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="{{asset('css/content.css')}}" rel="stylesheet">
        <!-- Styles -->
        <style>
          
        </style>
            
    </head>
    <body>
    <div id="container" >
            <br>
            <center>
            <div class="container1 pullUp">
                    <a href="{{ url('Stock') }}"> STOCK</a>
                    <a href="{{ url('Progress') }}"> PROGRESS </a>
                </div>
                <a href="{{ url('') }}"> <img src="{{ asset('img/logo.png') }}" style="height:12%; position: absolute; left:45.5%; top:1%;"/>
                   </a>
                <div class="container2 pullUp">
                    <a href="{{ url('Dashboard') }}"> DASHBOARD</a>
                    <a href="{{ url('Supply') }}"> SUPPLY</a>
                  </div> 
        <!-- DROPDOWN --><!-- DROPDOWN --><!-- DROPDOWN --><!-- DROPDOWN --><!-- DROPDOWN -->

        <div id="menubar" onclick="HideShow()">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            </div>
                <div id="outside">
                        <div id="circle">
                        <img src="{{ asset('img/img_avatar.png') }}" id="imageg1"/>
                        </div>
                        

                    <div id="inside">
                    <br>
                    <br>
                    <br>
                    <br>
                    <center>
                     <p style='color:black; font-size:20px'> "first_name" 
                         "last_name"</p>
                        <p style='color:black; margin-top:-20px; font-size:15px'> @username </p>
                        <p style='color:#654321; margin-top:0px; font-size:30px'> "position" </p>
                        <p style='color:black; margin-top:0px; font-size:15px'> "mobile" </p>
                         <p style='color:black; margin-top:-20px; font-size:15px'> "email" </p>
                       
                    </center>            
                    </div>

                    <div id="formprof">
                <button id="submitbutton" onclick="edit()"> Edit Profile
                    <i class="fas fa-pencil-alt" style="font-size:24px; position:absolute; margin-left:-57%;"></i> </input>
                </button><br>
                
                <button id="submitbutton" onclick="edit()" style="margin-top:1%"> Register
                    <i class="fas fa-newspaper" style="font-size:24px; position:absolute; margin-left:-55%; "></i> </input>
                </button><br>
                
                <form action="" method="POST">
                    <input type="submit" name="Logout" id="submitprof" value="Log out">
                    <i class="fas fa-sign-out-alt" style="font-size:24px; margin-top:3%; position:absolute; margin-left:-95%;"></i></input>
                </form>
            </div>
        </div>
        @yield('body')
            </center>
        </div>
        <script>
        @yield('script')
    function HideShow() {
            var x = document.getElementById("outside");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        var modal = document.getElementById('outside');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
    </body>
</html>
