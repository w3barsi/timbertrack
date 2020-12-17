<div id="back" @if($display===false) style="display:none;" @endif>
    <div class="login">
        <span class='close'>&times;</span>
        <h1> Add Product</h1>
        <form wire:submit.prevent="submit">
            <input type='text' name='products' placeholder='Product Name' required>
            <label for='products'>
                <i class='fas fa-box-open'></i>
            </label>

            <input wire:model="test" type='number' name='available' placeholder='Available Pieces' required>
            <label for='available'>
                <i class='fas fa-calculator'></i>
            </label>

            <input type='number' name='price' placeholder='Price' required>
            <label for='price'>
                <i class='fas fa-dollar-sign'></i>
            </label>


            <select wire:model="category" name='category' placeholder='Category'
                style="margin-top:0%; margin-left:-40px" required>
                <option value='' selected hidden>Category</option>
                <option value='wood'>Wood</option>
                <option value='plastic'>Plastic</option>
                <option value='metal'>Metal</option>
                <option value='concrete'>Concrete</option>
                <option value='paint'>Paint</option>
            </select>
            <select name='category' placeholder='Category' onchange="reload()" style="margin-top:0%; margin-left: 20px"
                required>
                <option value='' disabled selected hidden>Subcategory</option>
                @if($subcategory != NULL)
                @foreach ($subcategory as $option)
                <option value='{{ $option->subcategory }}'>{{ $option->subcategory }}</option>
                @endforeach
                @endif
            </select>
            <select name='category' placeholder='Category' onchange="reload()" id="select1"
                style="margin-top:0%; margin-left:  20px" required>
                <option value='' disabled selected hidden>Product</option>
                <option value='wood'>Wood</option>
                <option value='plastic'>Plastic</option>
                <option value='metal'>Metal</option>
                <option value='concrete'>Concrete</option>
                <option value='paint'>Paint</option>
            </select>
            <label for='category'>
                <i class='fas fa-table'></i>
            </label>
            <input type='submit'>
        </form>
    </div>
</div>
