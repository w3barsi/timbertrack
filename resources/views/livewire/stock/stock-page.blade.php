@section('css')
<link href="{{asset('css/stock.css')}}" rel="stylesheet">
@endsection

<div id="container" wire:poll>
    <form wire:submit.prevent="" method="POST" class="movein">
        <input wire:model="search" class="search__input" type="text" placeholder="Search">
    </form>

    <div id="container3" class="moveout">
        <table id="table-stock">
            <thead>
                <tr>
                    <th style="width:35%">Product</th>
                    <th style="width:15%">Available</th>
                    <th style="width:15%">Price</th>
                    <th style="width:25%">Subcategory</th>
                    @if(auth()->user()->hasPosition('admin'))
                    <th></th>
                    @endif
                </tr>
            </thead>
            @foreach ($stocks as $stock)
            <tbody>
                <tr>
                    <td>
                        <div onclick="location.href='{{route('Stocks.stock', $stock)}}'" style="cursor: pointer;">
                            <center><a style="color:black; text-decoration:none"> {{ $stock->product }} </a></center>
                        </div>
                    </td>
                    <td>
                        <div onclick="location.href='{{route('Stocks.stock', $stock)}}'" style="cursor: pointer;">
                            <center>{{ $stock->available }}</center>
                        </div>
                    </td>
                    <td>
                        <div onclick="location.href='{{route('Stocks.stock', $stock)}}'" style="cursor: pointer;">
                            <center>{{ $stock->price }}</center>
                        </div>
                    </td>
                    <td>
                        <div onclick="location.href='{{route('Stocks.stock', $stock)}}'" style="cursor: pointer;">
                            <center>{{ $stock->subcategory }}</center>
                        </div>
                    </td>
                    @if(auth()->user()->hasPosition('admin'))
                    <td>
                        <input wire:click="delete({{$stock->id}})" type="submit" name="delete" value=""
                            id="submit-icon2">
                        <i class="fas fa-trash" style="margin-left:-23px; margin-top:5px; "> </i>

                    </td>
                    @endif
                </tr>
            </tbody>
            @endforeach

            {{-- <tr>
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

            </tr> --}}
        </table>
    </div>



    <div id="categories" class="fade-in1">
        <a class="@if($this->selected === 'all') selected @endif hover-shadow hover-color cursor-pointer"
            wire:click="selected('all')">
            <span>V</span><span>i</span><span>e</span><span>w</span> <span>A</span><span>l</span><span>l</span> </a>
        <a class=" @if($this->selected === 'wood') selected @endif hover-shadow hover-color cursor-pointer"
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

    <button class="fancy ">
        <span class="top-key"></span>
        <a onclick="HideShowAdd()" class="">Create</a>
        <span class="bottom-key-1"></span>
        <span class="bottom-key-2"></span>
    </button>

    {{-- <button class="fancy" style="margin-left:-23%; position: absolute;">
        <span class="top-key"></span>
        <a onclick="HideShowHistory()" class="">History</a>
        <span class="bottom-key-1"></span>
        <span class="bottom-key-2"></span>
    </button> --}}

    <div id='history'>
        <div class='log-history'>
            <span class='exit'>&times;</span>
            <h1>HISTORY</h1>
            <table style="width: 90%; margin-left:4%">
                <tr>
                    <th style="width:25%">User</th>
                    <th style="width:25%">Product</th>
                    <th style="width:25%">Timestamp</th>
                    <th style="width:25%">Intention</th>
                </tr>
                <tr>
                    <td>robine</td>
                    <td>Asol</td>
                    <td>19/12/2020 14:00</td>
                    <td>Update/Delete/Insert</td>
                </tr>
            </table>
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
