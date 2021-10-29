<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;

class PersonalInformation extends Component
{
    use WithFileUploads;

    public $name;
    public $lastname;
    public $email;
    public $about;
    public $address1;
    public $address2;
    public $user;
    public $success;
    public $newAvatar;
    public $birthday;

    public $rules = [
        'email' => 'email',
        'about' => 'max:140',
        'name' => 'max:24',
        'lastname' => 'max:24',
        'address1' => 'max:140',
        'address2' => 'max:140',
        'newAvatar' => 'image|mimes:jpeg,png,jpg|max:1048'
    ];

//    public function updatedNewAvatar()
//    {
//        $this->validate(['profileAvatar' => 'image:max10']);
//    }

    public function updated($propertyNames)
    {
        $this->validateOnly($propertyNames);
    }

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->address1 = auth()->user()->address1;
        $this->address2 = auth()->user()->address2;
        $this->lastname = auth()->user()->lastname;
        $this->about = auth()->user()->about;
//        $this->newAvatar = auth()->user()->avatar;

//        $this->birthday = optional(auth()->user()->birthday)->format('m/d/y');

    }

    public function dispatchInfo()
    {
        $this->validate();
            $filename = $this->newAvatar->store('/', 'avatars');
            auth()->user()->update([
                'name' => $this->name,
                'email' => $this->email,
                'address1' => $this->address1,
                'address2' => $this->address2,
                'lastname' => $this->lastname,
                'about' => $this->about,
                'avatar' => $filename
            ]);

            $this->emitSelf('notify-saved');

//        $this->success = "Profile Updated";
//        $this->dispatchBrowserEvent('notify', 'Profile saved')
//        session()->flash('notify-saved');

    }

    public function render()
    {
        $user = auth()->user();
        return view('livewire.profile.personal-information', compact('user'))->extends('layouts.app')->section('content');;
    }
}
