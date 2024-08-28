<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public function render()
    {

        $categories = Category::where('active', true)->get();

        return view('livewire.categories', compact('categories'));
    }
}
