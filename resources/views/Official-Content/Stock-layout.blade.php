@extends('Official-Content/layout')

@section('css')
    <link href="{{asset('css/stock.css')}}" rel="stylesheet">
    @yield('new-css')
@endsection


@section('body')
        <form  method="POST" class="movein">
            <input class="search__input" type="text" placeholder="Search">
            <input type="submit" name="go_search" style="position:absolute; display:none">
            </form>

            <div id="container3" class="moveout">
                @yield('content')

            </div>

            {{-- <button class="moveout" onclick="HideShowHistory()" id="button" style="left:25%; top:29.5%;"> Log-History </button> --}}


            <div id="categories" class="fade-in1">
                <div id="selectedCategory"> </div>
                <a  class="hover-shadow hover-color" href="{{ url('/Stock') }}"> <span>V</span><span>i</span><span>e</span><span>w</span> <span>A</span><span>l</span><span>l</span> </a>
                <a class="hover-shadow hover-color" href="{{ url('/Stock/wood') }}" > <span>W</span><span>o</span><span>o</span><span>d</span> </a>
                <a class="hover-shadow hover-color" href="{{ url('/Stock/plastic') }}"><span>P</span><span>l</span><span>a</span><span>s</span><span>t</span><span>i</span><span>c</span> </a>
                <a class="hover-shadow hover-color" href="{{ url('/Stock/metal') }}"> <span>M</span><span>e</span><span>t</span><span>a</span><span>l</span> </a>
                <a class="hover-shadow hover-color" href="{{ url('/Stock/concrete') }}"> <span>C</span><span>o</span><span>n</span><span>c</span><span>r</span><span>e</span><span>t</span><span>e</span>  </a>
                <a class="hover-shadow hover-color" href="{{ url('/Stock/others') }}"><span>O</span><span>t</span><span>h</span><span>e</span><span>r</span><span>s</span> </a>

            </div>

            <button class="fancy fade-in2">
                <span class="top-key"></span>
                <a onclick="HideShowAdd()" class="">Create</a>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
                </button>
            <div id= "back" style="display:none;">
                        <div class="login">
                        <span class='close'>&times;</span>
                        <h1> Add Product</h1>
                            <form action='' method='POST'>
                                <input type='text' name='products' placeholder='Product Name' required>
                                <label for='products'>
                                    <i class='fas fa-box-open'></i>
                                </label>

                                <input type='number' name='available' placeholder='Available Pieces' required>
                                <label for='available'>
                                    <i class='fas fa-calculator'></i>
                                </label>

                                <input type='number' name='price' placeholder='Price' required>
                                <label for='price'>
                                    <i class='fas fa-dollar-sign'></i>
                                </label>


                                <select name='category' placeholder='Category' onchange="reload()" style="margin-top:0%; margin-left:-40px" required>
                                <option value='' disabled selected hidden>Category</option>
                                <option value='wood'>Wood</option>
                                <option value='plastic'>Plastic</option>
                                <option value='metal'>Metal</option>
                                <option value='concrete'>Concrete</option>
                                <option value='paint'>Paint</option>
                            </select>
                            <select name='category' placeholder='Category' onchange="reload()"  style="margin-top:0%; margin-left: 20px" required>
                                <option value='' disabled selected hidden>Subcategory</option>
                                <option value='wood'>Wood</option>
                                <option value='plastic'>Plastic</option>
                                <option value='metal'>Metal</option>
                                <option value='concrete'>Concrete</option>
                                <option value='paint'>Paint</option>
                            </select>
                            <select name='category' placeholder='Category' onchange="reload()" id="select1" style="margin-top:0%; margin-left:  20px" required>
                                <option value='' disabled selected hidden>Product</option>
                                <option value='wood'>Wood</option>
                                <option value='plastic'>Plastic</option>
                                <option value='metal'>Metal</option>
                                <option value='concrete'>Concrete</option>
                                <option value='paint'>Paint</option>
                            </select>
                                <label for='category'>
                                    <i class='fas fa-table'></i>
                                </label>
                                <input type='submit' name='insert' value='Add'>
                            </form>
                        </div>
                    </div>

            <div id='history'>
            <div class='log-history'>
            <span class='exit'>&times;</span> <h1>HISTORY</h1>
            </div>

@endsection

@section('script')
<script>
function HideShowAdd() {
                var x = document.getElementById("back");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }

            var square = document.getElementById('back');
            var span = document.getElementsByClassName("close")[0];
            span.onclick = function() {
                square.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == square) {
                    square.style.display = "none";
                }
            }

    function HideShowHistory() {
        var x = document.getElementById("history");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
            var modal1 = document.getElementById('history');
            var exit = document.getElementsByClassName("exit")[0];
            exit.onclick = function() {
            modal1.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == modal1) {
                    modal1.style.display = "none";
                }
            }
            </script>
@endsection
