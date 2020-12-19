@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@endsection
<div id="container">

    <div class="p-5 mx-auto w-full">
        <div class="w-1/2 bg-white p-2 border-2 border-black rounded">
            <center>
                <h1>New Purchase</h1>
            </center>
            <form class="">
                <div class="space-x-2 flex flex-row">
                    <div>
                        <center>
                            <label for="stock">Stock</label><br>
                        </center>
                        <input type="text" name="stock" class="h-10 border-2 border-black rounded">
                    </div>
                    <div>
                        <center>
                            <label for="quantity">Quantity</label><br>
                        </center>
                        <input type="number" name="quantity" class="h-10 border-2 border-black rounded">
                    </div>
                    <div>
                        <label for="is_prepared">Is Prepared</label><br>
                        <center>
                            <input type="checkbox" name="is_prepared" class="h-10 w-10">
                        </center>
                    </div>
                </div>
                <div class="h-full">
                    <center>
                        <input type="submit" name="submit" value="Submit"
                    </center>
                </div>
            </form>
        </div>
        @if(isset($purchases))
        @foreach ($purchases as $purchase)
        {{$purchase->quantity}}<br>
        {{$purchase->stock->product}}<br>
        @endforeach
        @endif
    </div>
</div>
