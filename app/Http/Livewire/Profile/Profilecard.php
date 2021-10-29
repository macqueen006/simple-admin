<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class Profilecard extends Component
{
    public function render()
    {
        $user = auth()->user();
        return view('livewire.profile.profilecard', compact('user'));
    }
}
