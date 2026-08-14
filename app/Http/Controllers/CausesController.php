<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Causes; // Assuming you have a Blog model for your blog posts  

class CausesController extends Controller
{
    // Fetches all posts for the main causes page
    public function index()
    {
        // Fetch posts in descending order so the newest are first
        $causes = Causes::latest()->get(); 
        
        // Pass the posts to your causes.blade.php view
        return view('causes', compact('causes')); 
    }

    // Fetches a single post based on its slug
    public function show($slug)
    {
        // Find the post by its slug, or return a 404 error if not found
        $cause = Causes::where('slug', $slug)->firstOrFail();
        
        // Pass the single post to your single-causes.blade.php view
        return view('causes-item', compact('cause'));
    }
}
