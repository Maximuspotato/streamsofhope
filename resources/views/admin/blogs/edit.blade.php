@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Blog</h2>
    
    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label>{{ $blog->title }}</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label>Excerpt</label>
            <textarea name="excerpt" class="form-control">{{ $blog->excerpt }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>Body Content</label>
            <textarea name="body" class="form-control" rows="8" required>{{ $blog->body }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-success">Save Post</button>
    </form>
</div>
@endsection