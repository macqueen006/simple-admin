<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{

    public  $password;
    public $current_password;
    public $verify_password;
    public $notify_password =  false;

    public $rules = [
        'password' => 'required|max:20',
        'verify_password' => 'same:password',
        'current_password' => 'required'
    ];
    public $messages = [
        'password.required' => 'password required',
        'verify_password.same' => 'password must match',
        'current_password.required' => 'enter password'
    ];

    public function updated($propertynames)
    {
        $this->validateOnly($propertynames);
    }

    public function dispatchPassword()
    {
        $this->validate();
        if (!Hash::check($this->current_password, auth()->user()->password)) {
            $this->emitSelf('notify_password_reset');
        }else {
            auth()->user()->update([
                'password' => Hash::make($this->password)
            ]);
        $this->reset();
        $this->emitSelf('notify-profile_reset_password');
        }
    }


    public function render()
    {
        return view('livewire.profile.change-password')->extends('layouts.app')->section('content');;
    }
}
