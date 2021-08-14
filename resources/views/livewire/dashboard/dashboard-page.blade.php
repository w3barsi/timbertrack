@section('css')
<link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css" />
@endsection

<div id="container">

    <input id="flatpickr" id="timer" wire:model.lazy="date"
        style="position:absolute;   width: 13em; height: 13em; margin-left: 17%; margin-top: 3%; ">

    <label for="flatpickr">
        <i id="flatpickr" class="icon" style="margin-left: 17%; cursor:pointer;">
            <em>{{$weekname}}</em>
            <strong>{{$month}}</strong>
            <span>{{$day}}</span>
        </i>
    </label>

    <i class="icon" style="margin-left: 40%">
        <strong>Year</strong>
        <span>{{$year}}</span>
    </i>

    <div class="hovertimestamp"><span>Total Sales</span>
        <a class="social-link" target="_blank">{{ $overall }}</a>
        <a class="social-link" target="_blank">PHP</a>
    </div>
    <div id="piechart">
        <h2>
            <center>Sales</center>
            <table id="ListofProdTable">
                <tr>
                    <td align="center">Category</td>
                    <td align="center">Total</td>
                </tr>
                <tr>
                    <td align="center">Wood</td>
                    <td align="center">{{ $wood }}</td>
                <tr>
                <tr>
                    <td align="center">Plastic</td>
                    <td align="center">{{ $plastic }}</td>
                <tr>
                <tr>
                    <td align="center">Concrete</td>
                    <td align="center">{{ $concrete }}</td>
                <tr>
                <tr>
                    <td align="center">Metal</td>
                    <td align="center">{{ $metal }}</td>
                <tr>
                <tr>
                    <td align="center">Others</td>
                    <td align="center">{{ $others }}</td>
                <tr>
            </table>
        </h2>
    </div>

    <div id="listofprod">
        <h2>
            <center>Products</center>
        </h2>
        <table id="ListofProdTable">
            <tr>
                <td align="center">Product Name</td>
                <td align="center">Subcategory</td>
                <td align="center">Total</td>
            </tr>
            @foreach($stocks as $stock)
                <tr>
                    <td align="center"><a wire:click="purchases('{{$stock->id}}')" style="cursor:pointer">{{$stock->product}}</a></td>
                    <td align="center"><a wire:click="purchases('{{$stock->id}}')">{{$stock->subcategory}}</a></td>
                    <td align="center"><a wire:click="purchases('{{$stock->id}}')">{{$arr[$i++]}}</a></td>
                </tr>
            @endforeach
        </table>
    </div>

    <div id="categorysales">
        <h2>
            <center> Categories</center>
        </h2>
        <div>
            <div class="buttoncategory relative">
                <div class="element">
                    <a wire:click="selected('wood')">Wood</a>
                </div>
            </div>
        </div>
        <div>
            <div class="buttoncategory relative">
                <div class="element">
                    <a wire:click="selected('plastic')">Plastic</a>
                </div>
            </div>
        </div>

        <div>
            <div class="buttoncategory relative">
                <div class="element">
                    <a wire:click="selected('concrete')">Concrete</a>
                </div>
            </div>
        </div>
        <div>
            <div class="buttoncategory relative">
                <div class="element">
                    <a wire:click="selected('metal')">Metal</a>
                </div>
            </div>
        </div>
        <div>
            <div class="buttoncategory relative">
                <div class="element">
                    <a wire:click="selected('others')">Others</a>
                </div>
            </div>
        </div>
    </div>
    <div id="selectedprod">

        <h1 style="position:absolute; margin-top:6%; margin-left:2%">Product Sales</h1>

        <table id="ListofProdTable"
            style="display:inline-block; float: right; width:68%;margin-top:3%; margin-right:3%">
            <tr style="position: sticky">
                <td align="center" style="width:29%">Date and Time</td>
                <td align="center" style="width:29%">No. of Items</td>
                <td align="center" style="width:29%">Unit Price</td>
            </tr>

    @foreach ( $purchased as $purchase)

                <tr>
                    <td align="center" style="width:29%">{{ $purchase->created_at }}</td>
                    <td align="center" style="width:29%">{{ $purchase->quantity }}</td>
                    <td align="center" style="width:29%">{{ $purchase->total }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <br>
    <br>
    <script>
        var example = flatpickr('#flatpickr');
    </script>
</div>
