<div id="editback">
    <div id="edited" style="position:absolute">
        <span class='editclose'>&times;</span>
        <div class="column left" style="background-color:#F5F5F5">
            <center>

                <h2 style="color:black">Edit Profile</h2><br>

                <form wire:submit.prevent="submit">

                    <img src="{{ asset('img/img_avatar.png') }}" id="img21" alt="Avatar"><br>
                    <input type="file" name="file" id="imgInp"
                        style="display:none; cursor:pointer; position:absolute; z-index:20; margin-top:6%; margin-left: -5%; " />
                    <label for="imgInp"> <i
                            style="width:29%; font-style: normal;  position:absolute; margin-top:5%; margin-left:-15%; background-color: #006666;"
                            class="button button4">Upload new photo </i> </label>
            </center>
        </div>
        <div class="column middle" style="background-color:#F5F5F5">
            <h2>&nbsp;</h2>

            <p style=" margin-bottom: auto; color:black">Name</p>
            <input type="text" wire:model.lazy="name" name="name" style="line-height: 30px;" value="{{$user->name}}">

            <p style=" margin-bottom: auto; color:black">Password</p>
            <input type="password" id="password" style="line-height: 30px;" wire:model.lazy="password" name="password"
                onchange='check_pass();'>

            <p style=" margin-bottom: auto; color:black">Username</p>
            <input type="text" wire:model.lazy="username" name="user" style="line-height: 30px;"
                value="{{$user->username}}">

            <p style=" margin-bottom: auto; color:black">Email Address</p>
            <input type="email" wire:model.lazy="email" name="email" style="line-height: 30px;"
                value="{{$user->email}}">

        </div>
        <div class="column right" style="background-color:#F5F5F5;">
            <h2>&nbsp;</h2>

            <p style=" margin-bottom: auto; color:black">Mobile</p>
            <input type="number" wire:model.lazy="mobile" name="mobile" style="line-height: 30px;"
                value="{{$user->mobile}}">

            <p style=" margin-bottom: auto; color:black">Confirm Password</p>
            <input type="password" id="confirm_password" wire:model.lazy="password_confirmed" name="password_confirmed"
                style="line-height: 30px;" onchange='check_pass();'>
            <span id='message'></span>

            <center><br>
                <input type="hidden" name="id" value="">
                <input type="submit"
                    style="width:30%; position:absolute; margin-top:1%; margin-left:-20%; background-color: #006666;"
                    class="button button5" id="Edit_Profile" name="Edit_Profile" value="Update">
            </center>
            </form>
        </div>
    </div>
</div>
