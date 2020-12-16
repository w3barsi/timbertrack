@extends('Official-Content/layout')

@section('css')
<link href="{{asset('css/resupply.css')}}" rel="stylesheet">
@yield('new-css')
@endsection

@section('body')
    <form  method="POST">
    <input class="search__input" type="text" placeholder="Search">
    <input type="submit" name="go_search" style="position:absolute; display:none">
    </form>
    <div id="container3" >
        @yield('content')

    </div>

    <div id="categories">
        <div id="selectedCategory"> </div>
        <a  class="hover-shadow hover-color" href="{{ url('/Resupply') }}"> <span>V</span><span>i</span><span>e</span><span>w</span> <span>A</span><span>l</span><span>l</span> </a>
        <a class="hover-shadow hover-color" href="{{ url('/Resupply/wood') }}" > <span>W</span><span>o</span><span>o</span><span>d</span> </a>
        <a class="hover-shadow hover-color" href="{{ url('/Resupply/plastic') }}"><span>P</span><span>l</span><span>a</span><span>s</span><span>t</span><span>i</span><span>c</span> </a>
        <a class="hover-shadow hover-color" href="{{ url('/Resupply/metal') }}"> <span>M</span><span>e</span><span>t</span><span>a</span><span>l</span> </a>
        <a class="hover-shadow hover-color" href="{{ url('/Resupply/concrete') }}"> <span>C</span><span>o</span><span>n</span><span>c</span><span>r</span><span>e</span><span>t</span><span>e</span>  </a>
        <a class="hover-shadow hover-color" href="{{ url('/Resupply/others') }}"><span>O</span><span>t</span><span>h</span><span>e</span><span>r</span><span>s</span> </a>

    </div>

    <h1 style=" position: absolute; margin-top:4%; margin-left:80%">DATE </h1>
    <div class="plus" name="plus">
        <center><label for="plus"> <i class="fa fa-plus" style="font-size:30px; margin-top:20%;"></i></label></center>
        <div class="slider">
            <form>

            </form>
        </div>
    </div>

@endsection
