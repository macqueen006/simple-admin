<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class PasswordReset extends Component
{
    public $email;
    public $rules = [
        'email' => 'required|email'
    ];

    public function updated($propertyNames) {
        $this->validateOnly($propertyNames);
    }

    public function dispatchEmail()
    {
        $this->validate();
        sleep(2);
        //send this to the mail then redirect
        return redirect('login')->with('status', 'We tried but this is just a demo');
    }

    public function render()
    {
        return view('livewire.auth.password-reset')->extends('layouts.base')->section('content');
    }
}
