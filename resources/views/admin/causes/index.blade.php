@extends('layouts.app')

@section('content')
<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
        <div class="block-30 block-30-sm item" style="background-image: url('{{ asset('images/header.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="heading">Create a New Cause</h2>
            </div>
            </div>
        </div>
        </div>
        
    </div>
</div>

<div class="container">
    <h2>Admin Dashboard - Manage Causes</h2>
    <a href="{{ route('admin.causes.create') }}" class="btn btn-success mb-3">Create New Cause</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($causes as $cause)
            <tr>
                <td>{{ $cause->title }}</td>
                <td>{{ $cause->created_at->format('M d, Y') }}</td>
                <td>
                    <!-- Edit Button -->
                    <a href="{{ route('admin.causes.edit', $cause->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    
                    <!-- Delete Form -->
                    <form action="{{ route('admin.causes.destroy', $cause->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this cause?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection