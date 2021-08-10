@section('css')
<link href="{{asset('css/product.css')}}" rel="stylesheet">
@endsection

<div id="container">
    <div id="container3">
        {{-- Can u add graph chart , year sale (January-December) of currrent year --}}
    </div>
    <img src="{{ asset('img/img_avatar.png') }}" id="img20" alt="Avatar">

    <p id="title">{{$stock->product}}</p>
    <div id="description">
        <p>Catergory&emsp;&nbsp; : &emsp;{{$stock->category}}</p>
        <p>Subcategory : &emsp;{{$stock->subcategory}}</p>
        <p>Price &emsp;&emsp;&emsp; : &emsp;Php {{$stock->price}}</p>
        <p>Available&emsp;&nbsp;&nbsp; :&emsp;{{$stock->available}}</p>
        <p>Date Created :&emsp;{{$stock->created_at->toDateString()}}</p>
        <p>Description</p>
        <p>&emsp; {{$stock->description}}</p>
    </div>

    @if(auth()->user()->hasPosition('admin') || auth()->user()->hasPosition('checker'))
    <button id="thisEdit" class="fancy">
        <span class="top-key"></span>
        <a onclick="HideShowEdit()">Edit</a>
        <span class="bottom-key-1"></span>
        <span class="bottom-key-2"></span>
    </button>
    @endif

    <form wire:submit.prevent="submit">
        <div id="showhide">
            <input type="file" name="file" id="editingProduct"
                style="display:none; cursor:pointer; position:absolute; z-index:20; margin-top:6%; margin-left: -5%; " />
            <label for="editingProduct"> <i id="thedesign" class="button button4">Upload new photo </i> </label>
        </div>

        <p id="title2"> <input wire:model.defer="product" type="text" value="{{$stock->product}}" /></p>

        <div id="description2">

            <p>Catergory&emsp;&nbsp; : &emsp;
                <select wire:model.defer="category">
                    <option value="{{$stock->category}}">{{$stock->category}}</option>
                    <option value="wood">Wood</option>
                    <option value="metal">Metal</option>
                    <option value="plastic">Plastic</option>
                    <option value="concrete">Concrete</option>
                    <option value="paint">Paint</option>
                </select></p>
            <p>Subcategory : &emsp;<input wire:model.defer="subcategory" value="{{$stock->subcategory}}"> </p>
            <p>Price &emsp;&emsp;&emsp; : &emsp;Php <input wire:model.defer="price" type="number"
                    value="{{$stock->price}}" />
            </p>
            <p>Available&emsp;&nbsp;&nbsp; :&emsp;<input wire:model.defer="available" type="number"
                    value="{{$stock->available}}" /></p>
            <p>Date Created :&emsp;{{$stock->created_at->toDateString()}}</p>
            <p>Description</p>
            <p>&emsp; <textarea wire:model.defer="description" type="textarea">{{$stock->description}}</textarea></p>
            </p>
        </div>
        <button type="submit" id="finishedit" class="fancy">
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

</div>


@section('script')

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
