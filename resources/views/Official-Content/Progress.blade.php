@extends('Official-Content/layout')

@section('css')
<link href="{{asset('css/progress.css')}}" rel="stylesheet">
@endsection

@section('body')
<form  method="POST" class="movein">
            <input class="search__input" type="text" placeholder="Search">
            <input type="submit" name="go_search" style="position:absolute; display:none">
            </form>

            <div id="container3" class="moveout">
                <table id="table-progress"><tr>
                    <th style="width:15%">Last Name</th>
                    <th style="width:15%">First Name</th>
                    <th style="width:15%">Address</th>
                    <th style="width:15%">Material</th>
                    <th style="width:15%">Quantity</th>
                    <th style="width:15%">Transaction</th>
                    <th style="width:20%">Progress</th>
                    </tr>
                    <tr>
                    <td><center>jumalon</center></td>
                    <td><center>robine</center></td>
                    <td><center>adrresdsds</center></td>
                    <td><center>product</center></td>
                    <td><center>23</center></td>
                    <td><center>PHP price*quatitiy</center></td>';
                    <td>
                        <select style="">
                            <option disabled selected hidden>ONGOING</option>
                            <option>COMPLETED</option>
                            <option>DECLINED</option>
                        </select>
                    </td>
                    </tr>
                </table>
            </div>


            <button class="fancy fade-in2">
                <span class="top-key"></span>
                <a onclick="HideShowAdd()" class="">Create</a>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
                </button>
                <button class="fancy fade-in1" style="margin-left:-79%; position: absolute;">
                <span class="top-key"></span>
                <a onclick="HideShowSort()" class="">Sort</a>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
                </button>
                      <div style="width:20%; height:10% ;  position:absolute; margin-left:38%; margin-top:-5%">
                            <center> <h1> DATE <h1> </center>
                    </div>
                      <div id= "elf" style="display:none">
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
                <center>
                    <div id= "detras">
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
</center>
@endsection

@section('script')
<script>
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
            function HideShowAdd() {
                var x = document.getElementById("elf");
                if (x.style.display === "none" ) {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }

            var add = document.getElementById('elf');
            var crate = document.getElementsByClassName("close")[0];
            crate.onclick = function() {
                add.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == add) {
                    add.style.display = "none";
                }
            }

            function HideShowSort() {
                var x = document.getElementById("detras");
                if (x.style.display === "none" ) {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }

            var sort = document.getElementById('detras');
            var asd = document.getElementsByClassName("exit")[0];
            asd.onclick = function() {
                sort.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == sort) {
                    sort.style.display = "none";
                }
            }
</script>
@endsection
