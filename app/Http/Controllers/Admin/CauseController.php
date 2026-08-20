<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cause;
use Illuminate\Support\Facades\Storage;

class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $causes = Cause::latest()->get();
        return view('admin.causes.index', compact('causes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.causes.create');
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
            // This saves the file to storage/app/public/causes 
            // and returns the path (e.g., "causes/filename.jpg")
            $imagePath = $request->file('image')->store('causes', 'public');
            
            // Add the path to our $data array so it gets saved to the database
            $data['image_path'] = $imagePath;
        }

        Cause::create($data);

        return redirect()->route('admin.causes.index')->with('success', 'Cause created successfully!');
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
    public function edit(Cause $cause)
    {
        return view('admin.causes.edit', compact('cause'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cause $cause)
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
            if ($cause->image_path) {
                Storage::disk('public')->delete($cause->image_path);
            }
            
            // B. Store the new image and grab its path
            $imagePath = $request->file('image')->store('causes', 'public');
            
            // C. Update the data array with the new path
            $data['image_path'] = $imagePath;
        }

        // 4. Update the database record
        $cause->update($data);

        return redirect()->route('admin.causes.index')->with('success', 'Cause updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cause $cause)
    {
        // Delete the image from the server if it exists
        if ($cause->image_path) {
            Storage::disk('public')->delete($cause->image_path);
        }

        $cause->delete();
        return redirect()->route('admin.causes.index')->with('success', 'Cause deleted successfully!');
    }
}
