@section('css')
<link href="{{asset('css/progress.css')}}" rel="stylesheet">
@endsection

<div id="container">
    <form method="POST" class="movein">
        <input class="search__input" type="text" placeholder="Search">
        <input type="submit" name="go_search" style="position:absolute; display:none">
    </form>

    <div id="container3" class="moveout">
        <table id="table-progress">
            <tr>
                <th style="width:10%">ID</th>
                <th style="width:25%">Name</th>
                <th style="width:25%">Address</th>
                <th style="width:15%">Total</th>
                <th style="width:20%">Status</th>
                <th style="width:3%"></th>
            </tr>
            @if (count($orders) > 0)
            @foreach ($orders as $order)
            <livewire:order.components.order-row :order="$order" />
            @endforeach
            @endif
        </table>
    </div>


    <button class="fancy fade-in2">
        <span class="top-key"></span>
        <a onclick="HideShowAdd()" class="">Create</a>
        <span class="bottom-key-1"></span>
        <span class="bottom-key-2"></span>
    </button>
    <button onclick="HideShowSort()" class="fancy fade-in1" style="margin-left:-79%; position: absolute;">
        <span class="top-key"></span>
        <a>Sort</a>
        <span class="bottom-key-1"></span>
        <span class="bottom-key-2"></span>
    </button>
    <div style="width:20%; height:10% ;  position:absolute; margin-left:38%; margin-top:-5%">
        <center>
            <h1> DATE <h1>
        </center>
    </div>

    <livewire:order.components.create-order />
</div>

<center>
    <div id="detras">
        <div class="sort">
            <span class='exit'>&times;</span>
            <h1 id="left"> Sorting</h1>
            <div style="position: absolute;margin-top:5%;height:500px; ">
                <form action='' method="POST">
                    <h1 style="margin-bottom: 0px; ">
                        <center> &nbsp; Date</center>
                    </h1>
                    <input id="flatpickr"><br>
                    <h1 style="margin-bottom: 0px; ">
                        <center> &nbsp; &nbsp;&nbsp;Category</center>
                    </h1>
                    <select name='category' placeholder='Category' onchange="reload()" id="select1"
                        style="margin-top:7%; margin-left:-50px" required>
                        <option value='' disabled selected hidden>Category</option>
                        <option value='wood'>Wood</option>
                        <option value='plastic'>Plastic</option>
                        <option value='metal'>Metal</option>
                        <option value='concrete'>Concrete</option>
                        <option value='paint'>Paint</option>
                    </select><br>
                    <select name='category' placeholder='Category' onchange="reload()" id="select1"
                        style="margin-top:20%; margin-left:-50px" required>
                        <option value='' disabled selected hidden>Subcategory</option>
                        <option value='wood'>Wood</option>
                        <option value='plastic'>Plastic</option>
                        <option value='metal'>Metal</option>
                        <option value='concrete'>Concrete</option>
                        <option value='paint'>Paint</option>
                    </select>
                    <input type='submit' name='insert' value='Sort ' style="margin-top:50%; margin-left: -10%; ">
                </form>
            </div>
        </div>
    </div>
</center>
</div>

@section('script')
<script>
    var example = flatpickr('#flatpickr');
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
