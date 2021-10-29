<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $name = 'godwin';
        return view('livewire.dashboard', compact('name'))->extends('layouts.app')->section('content');
    }
}
