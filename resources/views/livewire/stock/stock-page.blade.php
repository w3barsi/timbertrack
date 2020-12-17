@section('css')
<link href="{{asset('css/stock.css')}}" rel="stylesheet">
@endsection

<div id="container">
    <form method="POST" class="movein">
        <input wire:model="search" class="search__input" type="text" placeholder="Search">
        <input type="submit" name="go_search" style="position:absolute; display:none">
    </form>

    <div id="container3" class="moveout">
        <table id="table-stock">
            <tr>
                <th style="width:25%">Product</th>
                <th style="width:25%">Available</th>
                <th style="width:25%">Price</th>
                <th> </th>
            </tr>
            @foreach ($stocks as $stock)
            <tr>
                <td>
                    <center><a style="color:black; text-decoration:none"> {{ $stock->product }} </a></center>
                </td>
                <td>
                    <center>{{ $stock->available }}</center>
                </td>
                <td>
                    <center>{{ $stock->price }}</center>
                </td>
                <td>
                    <center>

                        <input type="submit" name="delete" value="" id="submit-icon2">
                        <i class="fas fa-trash" style="margin-left:-23px; margin-top:5px; "> </i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" name="form" value="" id="submit-icon3">
                        <i class="fas fa-pen" style="margin-left:-20px; margin-top:5px; "></i>
                    </center>
                </td>
            </tr>
            @endforeach

            <tr>
                <td>
                    <center><a style="color:black; text-decoration:none"> test 2 </a>
                </td>
                <form></form>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="updating"
                        maxlength='4' value='1234' /></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    PHP <input class="updating" maxlength='4' value='0123' /></center>
                </td>
                <td><input type='submit' name='update' value='' id='submit-icon'> <i class='fas fa-check'
                        style='margin-left:-20px; margin-top:5px; '></i></td>

            </tr>
        </table>
    </div>

    {{-- <button class="moveout" onclick="HideShowHistory()" id="button" style="left:25%; top:29.5%;"> Log-History </button> --}}


    <div id="categories" class="fade-in1">
        <a class="@if($selected === 'all') selected @endif hover-shadow hover-color cursor-pointer"
            wire:click="selected('all')">
            <span>V</span><span>i</span><span>e</span><span>w</span> <span>A</span><span>l</span><span>l</span> </a>
        <a class="@if($selected === 'wood') selected @endif hover-shadow hover-color cursor-pointer"
            wire:click="selected('wood')">
            <span>W</span><span>o</span><span>o</span><span>d</span> </a>
        <a class="@if($selected === 'plastic') selected @endif hover-shadow hover-color cursor-pointer"
            wire:click="selected('plastic')"><span>P</span><span>l</span><span>a</span><span>s</span><span>t</span><span>i</span><span>c</span>
        </a>
        <a class="@if($selected === 'metal') selected @endif hover-shadow hover-color cursor-pointer"
            wire:click="selected('metal')">
            <span>M</span><span>e</span><span>t</span><span>a</span><span>l</span> </a>
        <a class="@if($selected === 'concrete') selected @endif hover-shadow hover-color cursor-pointer"
            wire:click="selected('concrete')">
            <span>C</span><span>o</span><span>n</span><span>c</span><span>r</span><span>e</span><span>t</span><span>e</span>
        </a>
        <a class="@if($selected === 'others') selected @endif hover-shadow hover-color cursor-pointer"
            wire:click="selected('others')"><span>O</span><span>t</span><span>h</span><span>e</span><span>r</span><span>s</span>
        </a>
        <livewire:stock.components.stock-create />
    </div>

    <button class="fancy fade-in2">
        <span class="top-key"></span>
        <a onclick="HideShowAdd()" class="">Create</a>
        <span class="bottom-key-1"></span>
        <span class="bottom-key-2"></span>
    </button>

    <div id='history'>
        <div class='log-history'>
            <span class='exit'>&times;</span>
            <h1>HISTORY</h1>
        </div>

    </div>
</div>

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
