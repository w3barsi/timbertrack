<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>TimberTrack</title>

    <!-- Fonts -->
    @yield('css')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="{{asset('css/content.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Styles -->
    @livewireStyles
    <style>

    </style>
</head>

<body>

    <div id="header">
        <div class="hover" style=" width:17%; height:100%; float:right; border-left: 1px solid gray;">
            <img src="{{ asset('img/img_avatar.png') }}"
                style="height:80%; position: absolute; border-radius:50%; top:10%; margin-left:1.2%" />
            @auth
            <p style="font-size:30px; margin-left:48%; margin-top:10%"> {{ auth()->user()->username }} </p>


            <div class="view">
                <i class="fas fa-newspaper"
                    style=" position: absolute; margin-left:-39%; margin-top:12%; font-size:20px;"></i>
                <h3> <a style="position: absolute; margin-left:-24%; margin-top:5%"> VIEW PROFILE </a> </h3>
                <div class="info">
                    <img src="{{ asset('img/img_avatar.png') }}"
                        style="height:50%; position: absolute; border-radius:50%; top:10%; left:10%" />
                    <div style=" width:60%; position:absolute; height:48%; margin-left:35%; margin-top:5%">
                        <p style="font-size: 25px; margin-bottom:0px"> {{ auth()->user()->name}} </p>
                        <p style="margin-top: 0px;  margin-bottom:0px"> @ {{ auth()->user()->username}} </p>
                        <p style="margin-top: 0px">{{ auth()->user()->created_at}} </p>
                    </div>
                    <div style="width:40%; position:absolute; height:30%; margin-left: 3% ;margin-top:30%">
                        <p style="font-size: 25px;">{{ auth()->user()->position}} </p>
                    </div>
                    <div style="width:40%; position:absolute; height:30%; margin-left: 45% ;margin-top:33%">
                        <p style="margin-top: 0px;  margin-bottom:0px"> {{ auth()->user()->mobile}} </p>
                        <p style="margin-top: 0px;  margin-bottom:0px"> {{ auth()->user()->email}} </p>
                    </div>
                </div>
                @endauth
            </div>
            <div class="edit" onclick="edit()">
                <i class="fas fa-pencil-alt"
                    style="position: absolute; margin-left:-39%; margin-top:12%; font-size:20px;"></i>
                <h3> <a style="position: absolute; margin-left:-24%; margin-top:5%"> EDIT PROFILE </a> </h3>
            </div>
            <div class="logout">
                <i class="fas fa-sign-out-alt"
                    style="position: absolute;  margin-left:-39%; margin-top:12%; font-size:20px;"></i>
                <h3> <a href="{{ route('logout') }}"
                        style="text-decoration:none; position: absolute; margin-left:-15%; margin-top:5%"> LOGOUT </a>
                </h3>
            </div>

        </div>
        @if(auth()->user()->hasPosition('admin'))
        <div class="hover2" style=" width:17%; height:100%; float:right; border-left: 1px solid gray;">
            <i class="fa fa-angle-down" style="margin-top:1.8%;margin-left:2%; position: absolute; font-size:35px; "
                onclick="HideShowRegister()"> </i>
            <p style="font-size:30px; margin-left:30%; margin-top:10%; cursor: pointer;" onclick="HideShowRegister()">
                REGISTER </p>
            <div class="viewregister">
                <i class="fas fa-newspaper"
                    style=" position: absolute; margin-left:-39%; margin-top:12%; font-size:20px;"></i>
                <h3> <a href="{{ url('/Registered') }}"
                        style="position: absolute; margin-left:-24%; margin-top:5%; text-decoration:none;"> VIEW
                        REGISTERED </a> </h3>
            </div>
        </div>
        @endif
    </div>


    <div id="companyName">
        <a href="{{ url('') }}"> <img src="{{ asset('img/logo.png') }}"
                style="height:80%; position: absolute; left:3%; top:5%;" />
        </a>
        <h1 style="color:white; margin-top:5%; margin-left:24%; font-size: 33px;"> TIMBERTRACK </h1>
    </div>

    <div id="menu">
        <div id="stock">
            <i class="fa fa-cube" style="color:white; font-size: 30px; margin-top:5%; margin-left:5%;"></i>
            <a href="{{ route('Stocks') }}" style="font-size: 30px; color:white; margin-left:4%; text-decoration:none">
                STOCKS </a>
        </div>

        <div id="progress">
            <i class="fa fa-tasks" style="color:white; font-size: 30px; margin-top:5%; margin-left:5%;"></i>
            <a href="{{ route('Orders') }}" style="font-size: 30px; color:white; margin-left:4%; text-decoration:none">
                ORDERS </a>
        </div>

        <div id="dashboard">
            <i class="fa fa-columns" style="color:white; font-size: 30px; margin-top:5%; margin-left:5%;"></i>
            <a href="{{ url('/Dashboard') }}"
                style="font-size: 30px; color:white; margin-left:4%; text-decoration:none"> DASHBOARD </a>
        </div>

        <div id="resupply">
            <i class="fa fa-cubes" style="color:white; font-size: 30px; margin-top:5%; margin-left:5%;"></i>
            <a href="{{ url('/Resupply') }}" style="font-size: 30px; color:white; margin-left:4%; text-decoration:none">
                RESUPPLY </a>
        </div>


    </div>
    <div id="registerback" style="display:none">
        <div class="register">
            <span class='registerclose'>&times;</span>
            <h1> Register</h1>
            <form action='{{ route('RegisterEmployee') }}' method='POST'>
                @csrf
                <select name="position" style="margin-left: 11%">
                    <option hidden selected disabled> Choose a position </option>
                    <option style="font-size: 15px" value="admin"> Admin </option>
                    <option style="font-size: 15px" value="cashier"> Cashier </option>
                    <option style="font-size: 15px" value="checker"> Checker </option>
                    <option style="font-size: 15px" value="employee"> Employee </option>
                </select>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                &nbsp;&nbsp;
                <input type="checkbox" name="checkbox" required> Confirm

                <input type="submit">
            </form>
        </div>
    </div>


    <livewire:components.edit-profile :user="auth()->user()" />
    {{-- <div id="editback">
        <div id="edited" style="position:absolute">
            <span class='editclose'>&times;</span>
            <div class="column left" style="background-color:#F5F5F5">
                <center>

                    <h2 style="color:black">Edit Profile</h2><br>

                    <form action="" method='POST' enctype="multipart/form-data">

                        <img src="{{ asset('img/img_avatar.png') }}" id="img21" alt="Avatar"><br>
    <input type="file" name="file" id="imgInp"
        style="display:none; cursor:pointer; position:absolute; z-index:20; margin-top:6%; margin-left: -5%; " />
    <label for="imgInp"> <i
            style="width:29%; font-style: normal;  position:absolute; margin-top:5%; margin-left:-15%; background-color: #006666;"
            class="button button4">Upload new photo </i> </label>
    </center>
    </div>
    <div class="column middle" style="background-color:#F5F5F5">
        <h2>&nbsp;</h2>

        <p style=" margin-bottom: auto; color:black">First Name</p>
        <input type="text" name="first_name" style="line-height: 30px;" value="">

        <p style=" margin-bottom: auto; color:black">Password</p>
        <input type="password" id="password" value="" style="line-height: 30px;" name="password"
            onchange='check_pass();' required>

        <p style=" margin-bottom: auto; color:black">Username</p>
        <input type="text" name="user" style="line-height: 30px;" value="">

        <p style=" margin-bottom: auto; color:black">Email Address</p>
        <input type="email" name="email" style="line-height: 30px;" value="">

    </div>
    <div class="column right" style="background-color:#F5F5F5;">
        <h2>&nbsp;</h2>
        <p style=" margin-bottom: auto;color:black">Last Name</p>
        <input type="text" name="last_name" style="line-height: 30px;" value="">

        <p style=" margin-bottom: auto; color:black">Confirm Password</p>
        <input type="password" id="confirm_password" name="confirm" style="line-height: 30px;" onchange='check_pass();'
            value="" required>
        <span id='message'></span>

        <p style=" margin-bottom: auto; color:black">Mobile</p>
        <input type="number" name="mobile" style="line-height: 30px;" value="">
        <center><br>
            <input type="hidden" name="id" value="">
            <input type="submit"
                style="width:30%; position:absolute; margin-top:1%; margin-left:-20%; background-color: #006666;"
                class="button button5" id="Edit_Profile" name="Edit_Profile" value="Update">
        </center>
        </form>
    </div>
    </div>
    </div> --}}

    @yield('body')
    <script>
        function HideShowRegister() {
                var x = document.getElementById("registerback");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            var registerBack = document.getElementById('registerback');
            var registerExit = document.getElementsByClassName("registerclose")[0];
            registerExit.onclick = function() {
                registerBack.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == registerBack) {
                    registerBack.style.display = "none";
                }
            }

    </script>
    <script>
        function edit() {
            var y = document.getElementById("editback");
            if (y.style.display === "none") {
                y.style.display = "block";
            } else {
                y.style.display = "none";
            }
        }

            var editback = document.getElementById('editback');
            var editclose = document.getElementsByClassName("editclose")[0];
            editclose.onclick = function() {
                editback.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == editback) {
                    editback.style.display = "none";
                }
            }

        function check_pass() {
            if (document.getElementById('password').value ==
                    document.getElementById('confirm_password').value) {
                document.getElementById('Edit_Profile').disabled = false;
                document.getElementById('message').innerHTML = '<i class="fa fa-check" style="font-size:15px;color:green"></i>';
            } else {
                document.getElementById('Edit_Profile').disabled = true;
                document.getElementById('message').innerHTML = '<i class="fa fa-close" style="font-size:15px;color:red"></i>';

            }
        }

        function passwordMatchAlert()
        {
            if (document.getElementById('password').value == document.getElementById('confirm_password').value)
            {
                alert("Password has been updated");
            }

        }

        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img21').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });



    </script>
    @yield('script')

    @livewireScripts
</body>

</html>
