<div id="container">
    @if(isset($purchases))
    @foreach ($purchases as $purchase)
    {{$purchase->quantity}}<br>
    @endforeach
    @endif
</div>
