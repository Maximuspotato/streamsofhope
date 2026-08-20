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
    <h2>Create a New Cause</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.causes.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        
        <div class="form-group mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        {{-- <div class="form-group mb-3">
            <label>Excerpt</label>
            <textarea name="excerpt" class="form-control">{{ old('excerpt') }}</textarea>
        </div> --}}

        <div class="form-group mb-3">
            <label>Body Content</label>
            <textarea name="body" class="form-control" rows="8" required>{{ old('body') }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>Cause Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>
        
        <button type="submit" class="btn btn-success">Save Cause</button>
    </form>
</div>
@endsection