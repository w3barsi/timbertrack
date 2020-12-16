@extends('Base/layout')

@section('body')
<div id="main" class="fade-in1">
    <center>
        <p style="font-size: 24px; line-height:0px; margin-bottom: 0px;">Tony's Lumber and Construction Supply </p>
        <p style="font-size: 96px; line-height:100px; margin-top: 30px;margin-bottom: 0px;">TIMBER TRACK</p>
        <p style="font-size: 18px; line-height:25px; margin-top: 10px;margin-bottom: 0px;">An inventory management
            system that allows a company to manage <br>
            supplies and keeps track of the finance and progress of a work</p>
    </center>
</div>
<div class="vl fade-in"></div>

<a onclick="HideShow()" class="cta fade-out ">
    <span>GET STARTED</span>
    <svg width="13px" height="10px" viewBox="0 0 13 10">
        <path d="M1,5 L11,5"></path>
        <polyline points="8 1 12 5 8 9"></polyline>
    </svg>
</a>


<div id='back' @if($login===true)style="display: block" @endif>
    <div class='login'>
        <span class='close'>&times;</span>
        <h1>Login</h1>
        <form action='{{ route('login') }}' method='POST'>
            @csrf
            <label for='username'>
                <i class='fas fa-user'></i>
            </label>
            <input type='text' name='username' placeholder='Username' required>
            <label for='password'>
                <i class='fas fa-lock'></i>
            </label>

            <input type='password' name='password' placeholder='Password' required>

            @if (session('status'))
            <div style="color:red">{{ session('status') }}</div>
            @endif
            <input type='submit' name='Login' value='Login'>
        </form>
    </div>
</div>
@endsection
