<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class EmailSetting extends Component
{
    public function render()
    {
        return view('livewire.profile.email-setting')->extends('layouts.app')->section('content');;
    }
}
