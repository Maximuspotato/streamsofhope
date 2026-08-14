<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; // Assuming you have a Blog model for your blog posts  

class BlogController extends Controller
{
    // Fetches all posts for the main blog page
    public function index()
    {
        // Fetch posts in descending order so the newest are first
        $blogs = Blog::latest()->get(); 
        
        // Pass the posts to your blog.blade.php view
        return view('blog', compact('blogs')); 
    }

    // Fetches a single post based on its slug
    public function show($slug)
    {
        // Find the post by its slug, or return a 404 error if not found
        $blog = Blog::where('slug', $slug)->firstOrFail();
        
        // Pass the single post to your single-blog.blade.php view
        return view('blog-item', compact('blog'));
    }
}
