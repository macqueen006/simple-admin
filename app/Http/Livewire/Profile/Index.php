<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $user = auth()->user();
        return view('livewire.profile.index', compact('user'))->extends('layouts.app')->section('content');
    }
}
