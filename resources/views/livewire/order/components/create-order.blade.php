<div id="elf" @if($display===false)style="display:none" @endif>
    <div class="login">
        <span class='close'>&times;</span>
        <h1>Create New Order</h1>

        <form wire:submit.prevent="create" action='' method='POST'>

            <div>
                <input type='text' wire:model="name" placeholder='Name' style="" required><br>
            </div>
            <div>
                <input type='text' wire:model="address" placeholder='Address' style="" required><br>
            </div>
            <div>
                <select wire:model="status" id="select1">
                    <option value="ongoing">Ongoing</option>
                    <option value="completed">Completed</option>
                </select>
            </div>

            <input type='submit' name='insert' value='Create'>
        </form>
    </div>
</div>
