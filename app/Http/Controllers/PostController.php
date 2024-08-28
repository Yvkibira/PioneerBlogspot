<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isNull;

class PostController extends Controller
{

    public function index($slug)
    {
        // Fetch posts that are active, not null 'updated_at', and optionally filter by slug
        $post = Post::where('active', true)->where('slug', $slug)->whereNotNull('updated_at')->first();
        if (!$post) {
            return redirect(route('blogs'))->with('error', 'Blog not found. Please explore some of our other Blog posts.');
        }

        return view('frontend.blog.post', compact('post'));
    }

    public function category($category)
    {
        // Fetch posts that are active, not null 'updated_at', and optionally filter by slug
        $postCategory = Post::where('active', true)
            ->whereNotNull('updated_at')
            ->whereHas('categories', function ($query) use ($category) {
                $query->where('slug', $category);
            })
            ->paginate('5');



        if (count($postCategory) <= 0) {
            return redirect(route('blogs'))->with('error', 'Category not found. Please explore some of our other Blog posts.');
        }


        return view('frontend.blog.category', compact('postCategory'));
    }
}
