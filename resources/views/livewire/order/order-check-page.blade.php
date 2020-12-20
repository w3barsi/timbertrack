@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="{{asset('css/order-check.css')}}" rel="stylesheet">
@endsection
<div id="container">

    <div class="p-5 mx-auto w-full">
        <div class="fixed  bg-gray-50 p-4 border-2 border-black rounded" style="font-size:20px;width:78%">
            <h1>Name: &ensp; Robine Cole Jumalon
                &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
               Address: &ensp;hoodies fglksahfjhasjkhfkjas
            <p class="float-right" > Status:&ensp; Ongoing</p>

            </h1>

        </div>
    </div>

        <div class="p-20 mx-auto w-full p-4 ">
            <div class="totalSale" >
                <i class="fa fa-shopping-cart" style="display:inline; margin-right:70px;margin-left:20px;"></i> Total: Php TOTAL
                <div class="nav-dropdown">
                    <table  id="totaltabel" >
                        <tr>
                            @if(isset($purchases))
                            @foreach ($purchases as $purchase)
                            <td style="text-align: left"> &emsp;{{$purchase->stock->product}}</td>
                            <td>total</td>
                            @endforeach
                            @endif
                        </tr>

                    </table>
                </div>
            </div>

            <div class=" p-4 w-8/12 bg-gray-50 border-black rounded"  style="overflow:auto; height:700px;">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        @if(isset($purchases))
                        @foreach ($purchases as $purchase)
                        <td>{{$purchase->id}}</td>
                        <td>{{$purchase->stock->product}}</td>
                        <td>{{$purchase->stock->price}}</td>
                        <td>{{$purchase->quantity}}</td>
                        <td>total</td>
                        @endforeach
                        @endif
                    </tr>
                </table>
            </div>

            <div class="w-4/12 bg-white p-2 border-2 border-black rounded" style="margin-left: 70% ; margin-top:-16%">
                <center>
                    <h1>New Purchase</h1>
                </center>
                <form class="">
                    <div class="space-x-2 flex flex-row" style="margin-left: 10px;">
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
                    </div>
                    <br>
                        <div>

                            <center>
                                <input type="checkbox" name="is_prepared" class="h-5 w-5" >
                                <label for="is_prepared" style="font-size:20px;">Is Prepared</label>
                            </center>
                        </div>

                    <div class="h-full">
                        <center>
                            <input type="submit" name="submit" value="Submit">
                        </center>
                    </div>
                </form>
            </div>


        </div>
</div>
