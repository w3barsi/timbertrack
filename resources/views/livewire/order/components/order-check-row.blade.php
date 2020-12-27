<tbody>
    <tr>
        <td>{{$purchase->id}}</td>
        <td>{{$purchase->stock->product}}</td>
        <td>{{$purchase->stock->price}}</td>
        <td>
            <input
                class="w-20 pl-2 focus:outline-none @if($available === true) border-4 border-green-500 @elseif($available===false) border-2 border-red-500 @endif"
                wire:model="qty" type="number" placeholder="{{$qty}}" value="{{$qty}}">
        </td>
        <td class="bg-gradient-to-b
        @if($purchase->is_prepared === 1) from-green-500 to-green-400 hover:from-green-600 hover:to-green-500 @else
         from-red-500 to-red-400 hover:from-red-600 hover:to-red-500 @endif
        cursor-pointer " wire:click="status">
            {{ $purchase->total }}</td>
        <td class="bg-black text-white cursor-pointer  hover:bg-white hover:text-black" wire:click="destroy">
            Delete</td>
    </tr>
</tbody>
