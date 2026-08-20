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
    <h2>Edit Cause</h2>
    
    <form action="{{ route('admin.causes.update', $cause->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label>{{ $cause->title }}</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label>Excerpt</label>
            <textarea name="excerpt" class="form-control">{{ $cause->excerpt }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>Body Content</label>
            <textarea name="body" class="form-control" rows="8" required>{{ $cause->body }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-success">Save Post</button>
    </form>
</div>
@endsection