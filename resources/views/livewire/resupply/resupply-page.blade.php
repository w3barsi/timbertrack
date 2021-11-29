@section('css')
<link href="{{asset('css/resupply.css')}}" rel="stylesheet">
@endsection

<div id="container" wire:poll>
    <form wire:submit.prevent="" method="POST" class="movein">
        <input wire:model="search" class="search__input" type="text" placeholder="Search">
    </form>

    <div id="container3" class="moveout">
        <table id="table-resupply">
            <thead>
                <tr>
                    <th style="width:35%">Product</th>
                    <th style="width:15%">Available</th>
                    <th style="width:15%">Accept</th>
                    <th style="width:25%">Reject</th>
                    <th style="width:25%">Resupply!</th>
                    @if(auth()->user()->hasposition('admin') || auth()->user()->hasposition('checker'))
                    <th></th>
                    @endif
                </tr>
            </thead>
            @foreach ($stocks as $stock)
            <tbody>
                <tr>
                    <td>
                        <div>
                            <center><a style="color:black; text-decoration:none">{{ $stock->product }}</a></center>
                        </div>
                    </td>
                    <td class>
                        <div>
                            <center>{{ $stock->available }}</center>
                        </div>
                    </td>
                    <td>
                        <div>
                            <center>{{ $acceptArray[$i++] }}</center>
                        </div>

                    </td>
                    <td class>
                        <div>
                            <center>{{ $rejectArray[$j++] }}</center>
                        </div>
                    </td>
                    @if(auth()->user()->hasPosition('admin') || auth()->user()->hasPosition('checker') )
                    <td>
                        <div onclick="location.href='{{route('Resupplying.resupply', $stock)}}'" style="cursor: pointer;">
                        <i class="fas fa-pen" style="margin-left:-23px; margin-top:5px; "></i>
                            <!-- <center>{{ $stock->subcategory }}</center> -->
                        </div>
                    </td>
                    @endif
                </tr>
            </tbody>
            @endforeach


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

    </div>

</div>

@section('script')
<script>

    function HideShowAdd(id) {
        console.log(id);
        var ez = id;
        console.log("hello");
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

    // function HideShowHistory() {
    //     var x = document.getElementById("history");
    //     if (x.style.display === "none") {
    //         x.style.display = "block";
    //     } else {
    //         x.style.display = "none";
    //     }
    // }
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
