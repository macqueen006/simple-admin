<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $currentPage = 1;
    public $success;
    //properties
    public $name;
    public $lastname;
    public $address1;
    public $address2;
    public $email;
    public $country;
    public $password;
    public $confirmPassword;

    private $validationRules = [
        1 => [
            'name' => ['required', 'min:3'],
            'lastname' => ['required', 'min:3'],
            'password' => ['required','string', 'min:5'],
            'confirmPassword' => ['required', 'string', 'same:password'],
        ],
        2 => [
            'address1' => ['required'],
            'address2' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'country' => ['required'],
        ],
    ];
    public $messages = [
        'name.required' => 'name required',
        'lastname.required' => 'last name required',
        'password.required' => 'password required',
        'confirmPassword.required' => 'confirm password',
        'confirmPassword.same' => 'password do not match',
    ];

    public function updated($propertyNames)
    {
        $this->validateOnly($propertyNames, $this->validationRules[$this->currentPage]);
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }

    public function register()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();
        $this->validate($rules);
       $user = User::create([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'country' => $this->country,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'password' => Hash::make($this->password),
        ]);

        $this->reset();
        $this->resetValidation();
        $this->success = "user created successfully";
        return redirect('login');
    }

    public $pages = [
        1 => [
            'heading' => 'Account',
            'subheading' => 'account details'
        ],
        2 => [
            'heading' => 'Address',
            'subheading' => 'Residential address'
        ],
        3 => [
            'heading' => 'Complete',
            'subheading' => 'Submit form'
        ]
    ];

    public function goToNextPage()
    {
        $this->validate($this->validationRules[$this->currentPage]);
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }


    public function render()
    {
        return view('livewire.auth.register')
            ->extends('layouts.base')
            ->section('content');
    }
}
