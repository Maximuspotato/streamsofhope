<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Cause;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the 3 most recent blogs and causes
        $blogs = Blog::latest()->take(3)->get();
        $causes = Cause::latest()->take(3)->get();

        // Pass both variables to the 'index' view (your home page)
        return view('index', compact('blogs', 'causes'));
    }

    public function getImages()
    {
        // 1. Get the absolute path to your public gallery folder
        $directory = public_path('images/gallery');
        
        // 2. Scan the directory for all files
        $files = File::files($directory);
        
        // 3. Extract just the relative paths to pass to the view
        $images = [];
        foreach ($files as $file) {
            $images[] = 'images/gallery/' . $file->getFilename();
        }
        
        return view('gallery', compact('images'));
    }
}
