<?php

namespace App\Livewire;

use App\Models\Carousel as ModelsCarousel;
use Livewire\Component;

class Carousel extends Component
{
    public function render()
    {
         $carousel=ModelsCarousel::first();

        return view('livewire.carousel',compact('carousel'));
    }
}
