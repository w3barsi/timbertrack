<div class=" z-10 w-4/12 bg-white p-2 border-2 border-black rounded" style="margin-left: 70% ; margin-top:-30%">
    <center>
        <h1>New Purchase</h1>
    </center>
    <div class="relative flex flex-col  items-center text-center">
        <div>
            <label for="stock">Stock</label><br>
            <input type="text" wire:model="search" class="px-1 h-10 w-96 border-2 border-black text-center rounded"
                wire:keydown.arrow-up="decrementHighlight" wire:keydown.arrow-down="incrementHighlight"
                wire:keydown.enter="addPurchase">
            @if ($error != NULL)
            <div class="mt-3 text-red-600 font-bold">{{$error}}</div>
            @endif


        </div>
        <div class="absolute mx-auto w-96 list-group bg-white rounded-t-none shadow-lg " style="margin-top: 4.5rem">
            @if($stocks != NULL)
            <div class="z-0 fixed top-0 right-0 bottom-0 left-0" wire:click="resetSearch"></div>

            @foreach ($stocks as $i => $stock)
            <div
                class="w-full pt-2 pb-1 @if($stock->available === 0) bg-red-100 @endif @if ($highlight === $i && $stock->available === 0) bg-red-200 @elseif ($highlight === $i) bg-gray-200 @endif">

                <a wire:click="setSearch($stock->product)"
                    class="z-10 w-full cursor-pointer">{{ $stock->product }}</a><br>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
