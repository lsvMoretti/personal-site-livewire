<?php

namespace App\Livewire\Home;

use Illuminate\Support\Carbon;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $now = now();
        $dateOfBirth = Carbon::createFromDate(1992, 10, 1);
        $age = (int)$dateOfBirth->diffInYears($now);
        return view('livewire.home.about', ['age' => $age]);
    }
}
