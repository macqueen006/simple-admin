<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class ChangePassword extends Component
{

    public  $reset;

    public $rules = [
        'reset.password' => 'required|max:20',
        'reset.verify_password' => 'same:reset.password'
    ];
    public $messages = [
        'reset.password.required' => 'password required',
        'reset.verify_password.same' => 'password must match'
    ];

    public function updated($propertynames)
    {
        $this->validateOnly($propertynames);
    }

    public function dispatchPassword()
    {
        $this->validate();
        $this->reset();
        $this->emitSelf('notify-profile_reset_password');
    }


    public function render()
    {
        return view('livewire.profile.change-password')->extends('layouts.app')->section('content');;
    }
}
