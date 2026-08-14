@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create a New Blog</h2>
    
    <form action="{{ route('admin.blogs.store') }}" method="POST">
        @csrf
        
        <div class="form-group mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label>Excerpt</label>
            <textarea name="excerpt" class="form-control"></textarea>
        </div>

        <div class="form-group mb-3">
            <label>Body Content</label>
            <textarea name="body" class="form-control" rows="8" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-success">Save Post</button>
    </form>
</div>
@endsection