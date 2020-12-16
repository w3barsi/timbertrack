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

    <!-- Styles -->
    <style>

    </style>
</head>

<body>

    <div id="header">
        <div class="hover" style=" width:17%; height:100%; float:right; border-left: 1px solid gray;">
            <img src="{{ asset('img/img_avatar.png') }}"
                style="height:80%; position: absolute; border-radius:50%; top:10%; margin-left:1.2%" />
            @auth
            <p style="font-size:30px; margin-left:48%; margin-top:10%"> {{ auth()->user()->username}}  </p>


            <div class="view" >
                <i class="fas fa-newspaper" style=" position: absolute; margin-left:-39%; margin-top:12%; font-size:20px;"></i>
                <h3> <a style="position: absolute; margin-left:-24%; margin-top:5%"> VIEW PROFILE  </a> </h3>
                <div class="info">
                    <img src="{{ asset('img/img_avatar.png') }}"
                    style="height:50%; position: absolute; border-radius:50%; top:10%; left:10%" />
                    <div style=" width:60%; position:absolute; height:48%; margin-left:35%; margin-top:5%">
                        <p style="font-size: 25px; margin-bottom:0px"> {{ auth()->user()->name}} </p>
                        <p style="margin-top: 0px;  margin-bottom:0px"> @ {{ auth()->user()->username}}  </p>
                        <p style="margin-top: 0px">{{ auth()->user()->created_at}}  </p>
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
            <div class="edit" >
                <i class="fas fa-pencil-alt" style="position: absolute; margin-left:-39%; margin-top:12%; font-size:20px;"></i>
                <h3> <a style="position: absolute; margin-left:-24%; margin-top:5%"> EDIT PROFILE  </a> </h3>
            </div>
            <div class="logout" >
                <i class="fas fa-sign-out-alt" style="position: absolute;  margin-left:-39%; margin-top:12%; font-size:20px;"></i>
                <h3> <a href="{{ route('logout') }}" style="text-decoration:none; position: absolute; margin-left:-15%; margin-top:5%"> LOGOUT  </a> </h3>
            </div>

            </div>
            <div  class="hover2" style=" width:17%; height:100%; float:right; border-left: 1px solid gray;">
                <i class="fa fa-angle-down" style="margin-top:1.8%;margin-left:2%; position: absolute; font-size:35px;"> </i>
                <p style="font-size:30px; margin-left:30%; margin-top:10%; cursor: pointer;">  REGISTER  </p>
                <div class="viewregister" >
                    <i class="fas fa-newspaper" style=" position: absolute; margin-left:-39%; margin-top:12%; font-size:20px;"></i>
                    <h3> <a href="{{ url('/Registered') }}" style="position: absolute; margin-left:-24%; margin-top:5%; text-decoration:none;"> VIEW REGISTERED  </a> </h3>
                </div>
            </div>
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
            <a href="{{ url('/Stock') }}" style="font-size: 30px; color:white; margin-left:4%; text-decoration:none">
                STOCK </a>
        </div>

        <div id="progress">
            <i class="fa fa-tasks" style="color:white; font-size: 30px; margin-top:5%; margin-left:5%;"></i>
            <a href="{{ url('/Progress') }}" style="font-size: 30px; color:white; margin-left:4%; text-decoration:none">
                PROGRESS </a>
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

    <div id="container">
        @yield('body')
    </div>

        @yield('script')


</body>

</html>
