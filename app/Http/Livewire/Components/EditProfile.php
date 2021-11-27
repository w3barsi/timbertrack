<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class EditProfile extends Component
{
    public $user;

    public $name;
    public $username;
    public $email;
    public $mobile;

    public $password = null;
    public $password_confirmed = null;

    public $error = null;

    protected $rules = [
        'name' => 'required| unique:users,name',
        'username' => 'required|unique:users,username',
        'email' => 'required|unique:users,email'
    ];
    public function submit()
    {
        $this->error = NULL;
        $this->validate();

        $this->user->name = $this->name;
        $this->user->username = $this->username;
        $this->user->email = $this->email;
        $this->user->mobile = $this->mobile;

        if ($this->password !== NULL && $this->password_confirmed !== NULL) {
            if ($this->password !== $this->password_confirmed) {
                $this->error = "Password and Password Cofirmation do not match!";
                return;
            }

            $this->user->password = Hash::make($this->password);
        }
        $this->password = NULL;
        $this->password_confirmed = NULL;
        $this->user->save();
    }

    public function mount()
    {
        $this->name = $this->user->name;
        $this->username = $this->user->username;
        $this->email = $this->user->email;
        $this->mobile = $this->user->mobile;
    }
    public function render()
    {
        return view('livewire.components.edit-profile');
    }
}