<?php


namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\SiteSettings;

class Home extends Component
{
    public $siteSettings;

    public function mount()
    {
        $this->siteSettings = SiteSettings::first(); // or SiteSettings::all() depending on your needs
    }

    #[Layout('components.layouts.app.frontend')]
    public function render()
    {
        return view('livewire.home')
            ->layoutData(['siteSettings' => $this->siteSettings]);
    }

}


