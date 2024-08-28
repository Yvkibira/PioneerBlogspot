<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Blog extends Component
{
    public function render()
    {

     $posts=Post::paginate(6);

        return view('livewire.blog',compact('posts'));
    }
}
