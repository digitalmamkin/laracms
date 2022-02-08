<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->withCount('comments')->paginate(10);
        $recent_posts = Post::withCount('comments')->get();
        $recent_posts = Post::latest()->take(8)->get();
        $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->take(5)->get();

        return view('/theme.default.home', [
        'posts' => $posts,
        'recent_posts' => $recent_posts,
        'categories' => $categories
        ]);  
    }  
}


