<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

    protected $messages = [
        'email.required' => 'email required',
        'email.email' => 'Invalid email address',
        'password.required' => 'password required',
    ];

    public function updated($propertyNames)
    {
        $this->validateOnly($propertyNames);
    }

    public function login()
    {
        $data = $this->validate();

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']], $this->remember)) {
             request()->session()->regenerate();
//            \auth()->login($this->rules, $this->remember);
            $this->reset(['email', 'password']);
//            sleep(2);
            return redirect()->intended('dashboard');
        } else {
//            sleep(2);
            return back()->with('status', 'Invalid login details');
        }

    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.base')->section('content');
    }
}
