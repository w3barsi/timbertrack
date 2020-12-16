@extends('Content/layout')

@section('css')
<link href="{{asset('css/progress.css')}}" rel="stylesheet">
@endsection

@section('body')
</center>
                <div id="progress" class="fade-in1">
                    <p style="font-size: 84px; line-height:100px; margin-top: 30px;margin-bottom: 0px;">PROGRESS</p>
                    <p style="font-size: 18px; line-height:25px; margin-top: 10px;margin-bottom: 0px;">Track how your deliveries are going. From start <br>
                    to finish, and how they're doing fulltime.</p>
                  </div>
 <center>
                 
                      <button id= "button" class="fade-in1" onclick="HideShowTable()">CHECK </button>
                      <button id="button1"  onclick="HideShowSort()" style="opacity:0">SORT </button>

                      <div id="container3" style="opacity: 0;"> 

                      </div>

                      <div id= "back" style="display:none">
                        <div class="login">
                        <span class='close'>&times;</span>
                        <h1> Add Progress</h1>
                            <form action='' method='POST'>
                            
                                
                                <select name='category' placeholder='Category' onchange="reload()" id="select1" style="margin-top:0px; margin-left:-400px" required>
                                    <option value='' disabled selected hidden>Category</option>
                                    <option value='wood'>Wood</option>
                                    <option value='plastic'>Plastic</option>
                                    <option value='metal'>Metal</option>
                                    <option value='concrete'>Concrete</option>
                                    <option value='paint'>Paint</option>
                                </select> 

                                <input type='text' name='lastname' placeholder='Last Name ' style="margin-top:70px;margin-right:30px" required>
                                <input type='text' name='firstname' placeholder='First Name' style="margin-top:70px;margin-right:30px" required>
                                <input type='text' name='address' placeholder='Address' style="position:absolute; margin-top:140px;margin-left:-10px" required>         
                                <input type='number' name='quantity' placeholder='Quantity' style="margin-top:70px; margin-right:0px" required>
                                   
                            
                                   
                                </select>   
                                <input type='submit' name='insert' value='Add'>
                            </form>
                        </div>
                    </div> 

                    <div id= "back1" style="display:">
                    <div class="sort">
                    <span class='exit'>&times;</span>
                    <h1 id="left"> Sorting</h1>
                    <div id="forInsert2">
                        <br> <br> <br>
                    <center> <h3> CLICK HERE TO ADD <br> 
            <button onclick="HideShowInserting()" id="add"> <i class="fa fa-plus-circle" style="font-size:33px;">
                </i> </button> </h3></center>
                    </div>
                    <div id="forInsert">
                    <h1 id="right"> Insert</h1>
                    <form action='' method='POST'>
                            <select name='category' placeholder='Category' onchange="reload()" id="select1" style="margin-top:0%; margin-left:-40px" required>
                                <option value='' disabled selected hidden>Category</option>
                                <option value='wood'>Wood</option>
                                <option value='plastic'>Plastic</option>
                                <option value='metal'>Metal</option>
                                <option value='concrete'>Concrete</option>
                                <option value='paint'>Paint</option>
                            </select> 
                            <select name='category' placeholder='Category' onchange="reload()" id="select1" style="margin-top:0%; margin-left: 25%" required>
                                <option value='' disabled selected hidden>Subcategory</option>
                                <option value='wood'>Wood</option>
                                <option value='plastic'>Plastic</option>
                                <option value='metal'>Metal</option>
                                <option value='concrete'>Concrete</option>
                                <option value='paint'>Paint</option>
                            </select> 
                            <select name='category' placeholder='Category' onchange="reload()" id="select1" style="margin-top:0%; margin-left: 58%" required>
                                <option value='' disabled selected hidden>Product</option>
                                <option value='wood'>Wood</option>
                                <option value='plastic'>Plastic</option>
                                <option value='metal'>Metal</option>
                                <option value='concrete'>Concrete</option>
                                <option value='paint'>Paint</option>
                            </select> 

                            <input type='text' name='lastname' placeholder='Last Name ' style="margin-top:70px; " required>
                            <input type='text' name='firstname' placeholder='First Name' style="margin-top:20px;" required>
                            <input type='text' name='address' placeholder='Address' style=" margin-top:20px;" required>         
                            <input type='number' name='quantity' placeholder='Quantity' style="margin-top:20px; " required>
                               
                        
                               
                            </select>   
                            <input type='submit' name='insert' value='Add'>
                        </form>
                    </div>
                    <div class="vl"></div>
                    </form>
                </div>
           </div> 
@endsection

@section('script')
    function HideShowInserting() {
                var x = document.getElementById("forInsert2");
                var y = document.getElementById("forInsert");
                if (x.style.display === "none" ) {
                    x.style.display = "block";
                    y.style.display = "none";
                } else {
                    x.style.display = "none";
                    y.style.display = "block";
                }
            }
function HideShowTable() {
                document.getElementById("container3").style.opacity="1";
                document.getElementById("button1").style.opacity="1";
            
            }
            function HideShowAdd() {
                var x = document.getElementById("back");
                if (x.style.display === "none" ) {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }

            var add = document.getElementById('back');
            var span = document.getElementsByClassName("close")[0];
            span.onclick = function() {
                add.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == add) {
                    add.style.display = "none";
                }
            }

            function HideShowSort() {
                var x = document.getElementById("back1");
                if (x.style.display === "none" ) {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }

            var sort = document.getElementById('back1');
            var span = document.getElementsByClassName("exit")[0];
            span.onclick = function() {
                sort.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == sort) {
                    sort.style.display = "none";
                }
            }
@endsection