@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Admin Dashboard - Manage Blogs</h2>
    <a href="{{ route('blogs.create') }}" class="btn btn-success mb-3">Create New Blog</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->created_at->format('M d, Y') }}</td>
                <td>
                    <!-- Edit Button -->
                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    
                    <!-- Delete Form -->
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection