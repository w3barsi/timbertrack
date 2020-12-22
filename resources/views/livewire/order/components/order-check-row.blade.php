<tbody>
    <tr>
        <td>{{$purchase->id}}</td>
        <td>{{$purchase->stock->product}}</td>
        <td>{{$purchase->stock->price}}</td>
        <td>{{$purchase->quantity}}</td>
        <td class="
        @if($purchase->is_prepared === 1) bg-green-500 @else bg-red-500 @endif
        cursor-pointer" wire:click="status">
            {{ $purchase->total }}</td>
        <td class="bg-black text-white cursor-pointer" wire:click="destroy">Delete</td>
    </tr>
</tbody>
