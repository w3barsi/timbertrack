@section('css')
<link href="{{asset('css/progress.css')}}" rel="stylesheet">
@endsection

<div id="container">
    {{-- <input class="search__input" type="text" placeholder="Search">
        <input type="submit" name="go_search" style="position:absolute; display:none"> --}}

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

    {{-- <div style="width:15%; height:10%;  position:absolute; margin-top:-3%">
        <input id="flatpickr">
        <label for="flatpickr">

            <h1 style="cursor: pointer;margin-left:35%"> 02/20/2020 <h1>

        </label>
    </div> --}}

    <livewire:order.components.create-order />
</div>



@section('script')
<script>
    var example = flatpickr('#flatpickr');

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

</script>
@endsection
