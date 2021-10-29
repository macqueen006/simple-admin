<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class AccountInformation extends Component
{
    public function render()
    {
        return view('livewire.profile.account-information')->extends('layouts.app')->section('content');
    }
}
