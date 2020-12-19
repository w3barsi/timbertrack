@extends('Official-Content/layout')

@section('css')
<link href="{{asset('css/product.css')}}" rel="stylesheet">
@endsection

@section('body')
<div id="container3">
Can u add graph chart , year sale (January-December) of currrent year
</div>
<img src="{{ asset('img/img_avatar.png') }}" id="img20" alt="Avatar">

<p  id="title">WOOD</p>
<div id="description">
<p>Catergory&emsp;&nbsp; : &emsp;Wood</p>
<p>Subcategory : &emsp;Plywood</p>
<p>Price &emsp;&emsp;&emsp; : &emsp;Php 24</p>
<p>Available&emsp;&nbsp;&nbsp; :&emsp;23</p>
<p>Date Created :&emsp;May 26, 2000</p>
<p>Description</p>
<p>&emsp; The hard fibrous material that forms the main substance of the trunk or branches of a tree or shrub, used for fuel or timber.</p>
</div>

<button id="thisEdit"class="fancy">
    <span class="top-key"></span>
    <a onclick="HideShowEdit()">Edit</a>
    <span class="bottom-key-1"></span>
    <span class="bottom-key-2"></span>
</button>

<form action="" method='POST' enctype="multipart/form-data">
    <div id="showhide">
        <input type="file"  name="file" id="editingProduct" style="display:none; cursor:pointer; position:absolute; z-index:20; margin-top:6%; margin-left: -5%; "/>
        <label for="editingProduct"> <i id="thedesign" class="button button4" >Upload new photo </i> </label>
        </div>

      <p id="title2"> <input type="text" placeholder="Wood" /></p>

<div id="description2">

<p>Catergory&emsp;&nbsp; : &emsp; <input type="text" placeholder="Category" /></p>
<p>Subcategory : &emsp;Plywood</p>
<p>Price &emsp;&emsp;&emsp; : &emsp;Php <input type="number" placeholder="Price" /></p>
<p>Available&emsp;&nbsp;&nbsp; :&emsp;<input type="number" placeholder="Available" /></p>
<p>Date Created :&emsp;May 26, 2000</p>
<p>Description</p>
<p>&emsp; <textarea type="textarea" placeholder="Category"></textarea></p></p>
</div>
<button id="finishedit"class="fancy">
    <input type="submit" style="position:absolute; display:none;">
    <span class="top-key"></span>
    <a>Submit</a>
    <span class="bottom-key-1"></span>
    <span class="bottom-key-2"></span>
</button>

</form>
<button id="finishedit2" class="fancy">
    <input type="submit" style="position:absolute; display:none;">
    <span class="top-key"></span>
    <a onclick="HideShowEdit()" class="">Cancel</a>
    <span class="bottom-key-1"></span>
    <span class="bottom-key-2"></span>
</button>



<script>
    function HideShowEdit(){

                   var x = document.getElementById("description");
                   var y = document.getElementById("thisEdit");
                   var z = document.getElementById("title");
                   var a = document.getElementById("title2");
                   var b = document.getElementById("finishedit");
                   var c = document.getElementById("description2");
                   var d = document.getElementById("finishedit2");
                   var je = document.getElementById("showhide");
                   if (x.style.display === "none"){
                       x.style.display = "block";
                       y.style.display = "block";
                       z.style.display = "block";
                       a.style.display = "none";
                       b.style.display = "none";
                       c.style.display = "none";
                       d.style.display = "none";
                       je.style.display = "none";
                   } else {
                       x.style.display = "none";
                       y.style.display = "none";
                       z.style.display = "none";
                       a.style.display = "block";
                       b.style.display = "block";
                       d.style.display = "block";
                       c.style.display = "block";
                       je.style.display = "block";
                   }
               }

    function reading(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img20').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#editingProduct").change(function(){
        reading(this);
    });


   </script>



@endsection



