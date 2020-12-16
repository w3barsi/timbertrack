@extends('Content/layout')

@section('css')
    <link href="{{asset('css/stock.css')}}" rel="stylesheet">
@endsection

@section('body')
            <div id="container3"> 
                
                
            </div> 

            <button class="moveout" onclick="HideShowAdd()" id="button" style="left:16%; top:29.5%;"> Add </button>
            
            <button class="moveout" onclick="HideShowHistory()" id="button" style="left:25%; top:29.5%;"> Log-History </button>
           

            <div id="stock" class="movein">
            <p style="font-size: 70px; line-height:100px; margin-top: 50%;margin-bottom: 0px;">STOCK</p>
            </div>

            <div class="fade-in1" id="category">
            <p style="font-size: 60px; line-height:100px; margin-top: 5%;margin-bottom: 0px;">Category</p>
            </div>

            <form action="" class="fade-in1" method="POST" id="category-button">
            <input type="submit" name="Wood" value="Wood" style="margin-left:-45%; margin-top: 16%;">
            <input type="submit" name="Plastic" value="Plastic" style="margin-left:-45%; margin-top: 20%;">
            <input type="submit" name="Metal" value="Metal" style="margin-left:-45%; margin-top: 24%;">
            <input type="submit" name="Concrete" value="Concrete" style="margin-left:-45%; margin-top: 28%;">
            <input type="submit" name="Paint" value="Paint" style="margin-left:-45%; margin-top: 32%;">
            <input type="submit" name="All" value="Show All" style="margin-left:-45%; margin-top: 36%;">
            </form>

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

                                
                                <select id="select1" name='category' placeholder='Category' required>
                                    <option value='' disabled selected hidden>Category</option>
                                    <option value='Wood'>Wood</option>
                                    <option value='Plastic'>Plastic</option>
                                    <option value='Metal'>Metal</option>
                                    <option value='Concrete'>Concrete</option>
                                    <option value='Paint'>Paint</option>
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
@endsection