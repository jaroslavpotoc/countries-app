<?php

namespace App\Livewire;

use Livewire\Component;

class HeaderSection extends Component
{
    public function navigateTo($route)
    {
        return redirect()->route($route);
    }

    public function render()
    {
        return view('livewire.header-section');
    }
}