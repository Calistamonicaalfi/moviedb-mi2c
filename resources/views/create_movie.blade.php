@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2>Input Movie</h2>
    <form action="/create-movie" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <!-- Slug -->
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control">
        </div>

        <!-- Synopsis -->
        <div class="mb-3">
            <label for="synopsis" class="form-label">Synopsis</label>
            <textarea name="synopsis" id="synopsis" rows="5" class="form-control" required></textarea>
        </div>

        <!-- Category -->
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-select" required>
                <option disabled selected>-- Select Category --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Year -->
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" name="year" id="year" class="form-control" min="1900" max="{{ date('Y') }}" required>
        </div>

        <!-- Actors -->
        <div class="mb-3">
            <label for="actors" class="form-label">Actors</label>
            <textarea name="actors" id="actors" class="form-control" rows="2" required></textarea>
        </div>

        <!-- Cover Image -->
        <div class="mb-3">
            <label for="cover_image" class="form-label">Cover Image URL</label>
            <input type="text" name="cover_image" id="cover_image" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection