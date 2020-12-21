@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="{{asset('css/order-check.css')}}" rel="stylesheet">
@endsection
<div id="container">

    <div class="p-5 mx-auto">
        <div wire:submit.prevent="" class="flex flex-row justify-between w- bg-gray-50 border-2 border-black rounded"
            style="font-size:20px;">
            <div class="py-2 px-3">Name: &ensp; <input type="text" class=" placeholder-black placeholder-opacity-100 "
                    wire:model.lazy="name" placeholder="{{ $order->name }}" value="{{ $order->name }}">
            </div>
            <div class="py-2 px-3">Address: &ensp; <input type="text"
                    class=" placeholder-black placeholder-opacity-100 " wire:model.lazy="address"
                    placeholder="{{ $order->address }}" value="{{ $order->address }}">
            </div>
            <div class="@if($order->status === 'completed') bg-green-500 @else bg-red-500 @endif py-2 px-3">
                Status:&ensp;
                {{ strtoupper($order->status) }}</div>
        </div>
    </div>

    <div class="p-20 mx-auto w-full p-4 ">
        <div class="totalSale">
            <i class="fa fa-shopping-cart" style="display:inline; margin-right:70px;margin-left:20px;"></i>
            {{ ($this->order->total ?? '0')}}
            <div class="nav-dropdown">
                <table id="totaltabel">
                    @if(isset($purchases))
                    @foreach ($purchases as $purchase)
                    <tr>
                        <td style="text-align: left"> &emsp;{{$purchase->stock->product}}</td>
                        <td>{{ $purchase->quantity * $purchase->stock->price }}</td>
                    </tr>
                    @endforeach
                    @endif

                </table>
            </div>
        </div>

        <div class=" p-4 w-8/12 bg-gray-50 border-black rounded" style="overflow:auto; height:700px;">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                @if(isset($purchases))
                @foreach ($purchases as $purchase)
                <livewire:order.components.order-check-row :purchase="$purchase" />
                @endforeach
                @endif
            </table>
        </div>
        <div class="w-4/12 bg-white p-2 border-2 border-black rounded" style="margin-left: 70% ; margin-top:-16%">
            <center>
                <h1>New Purchase</h1>
            </center>
            <div class="flex flex-col text-center">
                <div>
                    <label for="stock">Stock</label><br>
                    <input type="text" name="stock" class="px-1 h-10 w-11/12 border-2 border-black text-center rounded">
                </div>
            </div>
            <div class="mt-5">
                <div>
                    <label for="quantity">Quantity</label><br>
                    <input type="number" name="quantity" class="h-10 border-2 border-black rounded">
                </div>
                <div>
                    <input type="checkbox" name="is_prepared" class="h-5 w-5">
                    <label for="is_prepared" style="font-size:20px;">Is Prepared</label>
                </div>
                <div class="h-full">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </div>
        </div>
    </div>
</div>
