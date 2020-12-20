<div id="back" @if($display===true)style="display: block;" @else style="display: none;" @endif>
    <div class="login">
        <span class='close'>&times;</span>
        <h1> Add Product</h1>
        <form wire:submit.prevent="store">
            <input type='text' wire:model="product" placeholder='Product Name' required>
            <label for='products'>
                <i class='fas fa-box-open'></i>
            </label>

            <input type='number' wire:model="available" placeholder='Available Pieces' required>
            <label for='available'>
                <i class='fas fa-calculator'></i>
            </label>

            <input type='number' wire:model="price" placeholder='Price' required>
            <label for='price'>
                <i class='fas fa-dollar-sign'></i>
            </label>


            <select wire:model="category" name='category' placeholder='Category'
                style="margin-top:0%; margin-left:-40px" required>
                <option value='' selected>Category</option>
                <option value='wood'>Wood</option>
                <option value='plastic'>Plastic</option>
                <option value='metal'>Metal</option>
                <option value='concrete'>Concrete</option>
                <option value='paint'>Paint</option>
            </select>
            <label for='category'>
                <i class='fas fa-table'></i>
            </label>
            <select wire:model.lazy="subcategory" placeholder='Subcategory' style="margin-top:0%; margin-left: 20px"
                required>
                <option value=''>Subcategory</option>
                @if($options != NULL)
                @foreach ($options as $option)
                <option value="{{ $option->subcategory }}">{{ $option->subcategory }}</option>
                @endforeach
                @endif
            </select>

            <label for='subcategory'>
                <i class='fas fa-table'></i>
            </label>
            <input type='submit'>
        </form>
    </div>
</div>
