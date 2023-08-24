@extends('layouts.main')

@section('main-content')
    <main id="form" class="d-lg-flex flex-column align-items-center mt-4">
        <h1 class="mb-5">
            Add New Campground
        </h1>
        <form action="{{ route('index') }}" class="w-100">
            <div class="mb-3">
                <label for="camp-name" class="form-label">Campground Name</label>
                <input type="text" class="form-control" id="camp-name" placeholder="Seven Sisters Waterfall">
            </div>
            <div class="mb-3">
                <label for="camp-price" class="form-label">Price</label>
                <input type="number" class="form-control" id="camp-price" placeholder="Price in $">
            </div>
            <div class="mb-3">
                <label class="form-label" for="camp-image">Image</label>
                <input type="text" class="form-control" id="camp-image" placeholder="www.examplesute.com/image/2...">
            </div>
            <div class="mb-4">
                <label for="camp-price" class="form-label">Description</label>
                <textarea class="form-control" name="" id="camp-desc" cols="20" rows="8">A very beautiful experience!</textarea>
            </div>
            <button type="submit" onclick="addNewCamp()" id="submit-camp" class="btn">Add Campground</button>
        </form>
    </main>

    <script src="{{ asset('scripts/add-camp.js') }}"></script>
@endsection
