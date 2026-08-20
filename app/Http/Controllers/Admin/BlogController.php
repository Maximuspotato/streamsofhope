<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        // 2. Grab all the request data
        $data = $request->all();

        // 3. Check if an image was actually uploaded
        if ($request->hasFile('image')) {
            // This saves the file to storage/app/public/blogs 
            // and returns the path (e.g., "blogs/filename.jpg")
            $imagePath = $request->file('image')->store('blogs', 'public');
            
            // Add the path to our $data array so it gets saved to the database
            $data['image_path'] = $imagePath;
        }

        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        // 2. Grab all request data
        $data = $request->all();

        // 3. Check if a new image is being uploaded
        if ($request->hasFile('image')) {
            
            // A. If the blog already has an old image, delete it from the server
            if ($blog->image_path) {
                Storage::disk('public')->delete($blog->image_path);
            }
            
            // B. Store the new image and grab its path
            $imagePath = $request->file('image')->store('blogs', 'public');
            
            // C. Update the data array with the new path
            $data['image_path'] = $imagePath;
        }

        // 4. Update the database record
        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        // Delete the image from the server if it exists
        if ($blog->image_path) {
            Storage::disk('public')->delete($blog->image_path);
        }

        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
