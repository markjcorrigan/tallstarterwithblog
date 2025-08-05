<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class About extends Component
{
        public function mount(): void
    {
        //
    }



    #[Layout('components.layouts.app.frontend', ['title' => 'Why PMWay'])]
    public function render(): View
    {
        return view('livewire.about');
    }







}

