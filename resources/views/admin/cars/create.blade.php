@extends('layouts.admin')

@section('title', 'Cars-Create')

@section('customCss')
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
@endsection

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">@lang('cars') @lang('create')</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('admin.cars.index')}}" class="btn btn-info">@lang('list')</a>
        </div>

        <div class="container">

            <form action="{{route('admin.cars.store')}}" method="POST" class="mt-4" enctype="multipart/form-data" id="carForm">
                @csrf <!-- CSRF Token -->

                <!-- Make -->
                <div class="form-group">
                    <label for="make">@lang('make')</label>
                    <input
                        type="text"
                        class="form-control @error('make') is-invalid @enderror"
                        id="make"
                        name="make"
                        value="{{ old('make') }}"
                        placeholder="@lang('Enter make')">
                    @error('make')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Model -->
                <div class="form-group">
                    <label for="model">@lang('model')</label>
                    <input
                        type="text"
                        class="form-control @error('model') is-invalid @enderror"
                        id="model"
                        name="model"
                        value="{{ old('model') }}"
                        placeholder="@lang('Enter model')">
                    @error('model')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Year -->
                <div class="form-group">
                    <label for="year">@lang('year')</label>
                    <input
                        type="number"
                        class="form-control @error('year') is-invalid @enderror"
                        id="year"
                        name="year"
                        value="{{ old('year') }}"
                        placeholder="@lang('Enter year')"
                        min="1900"
                        max="2099"
                        required>
                    @error('year')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Price Per Day -->
                <div class="form-group">
                    <label for="price_per_day">@lang('price_per_day')</label>
                    <input
                        type="number"
                        class="form-control @error('price_per_day') is-invalid @enderror"
                        id="price_per_day"
                        name="price_per_day"
                        value="{{ old('price_per_day') }}"
                        placeholder="@lang('Enter price per day')"
                        step="0.01"
                        required>
                    @error('price_per_day')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Image -->
                <div class="form-group">
                    <label for="image">@lang('image')</label>
                    <input
                        type="file"
                        class="form-control @error('image') is-invalid @enderror"
                        id="image"
                        name="image"
                        value="{{ old('image') }}">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Availability -->
                <div class="form-group">
                    <label for="availablity">@lang('availablity')</label>
                    <select
                        class="form-control @error('availablity') is-invalid @enderror"
                        id="availablity"
                        name="availablity"
                        required>
                        <option value="" disabled selected>@lang('Select availablity')</option>
                        <option value="1" {{ old('availablity') == '1' ? 'selected' : '' }}>@lang('Available')</option>
                        <option value="0" {{ old('availablity') == '0' ? 'selected' : '' }}>@lang('Unavailable')</option>
                    </select>
                    @error('availablity')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Services -->
                @foreach ($services as $key => $service)
                <div>
                    <input type="checkbox" id="service_{{ $key + 1 }}" name="services[]" checked value="{{ $service->id }}">
                    <label for="service_{{ $key + 1 }}">{{ $service->name }}</label>
                </div>
                @endforeach

                <!-- Description Field with Quill -->
                <div class="form-group">
                    <label for="description">@lang('description')</label>
                    <!-- Quill Editor -->
                    <div id="editor" style="height: 200px;">{{ old('description') }}</div>
                    <!-- Hidden Input for Description -->
                    <input type="hidden" name="description" id="description">
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">@lang('Create')</button>
                </div>
            </form>

        </div>
    </div>

</div>

<x-admin.alert />

@endsection

@section('customJs')

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<script>
    // Quill toolbar options
    const toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // Text formatting
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],    // Lists
        [{ 'header': [1, 2, 3, false] }],                // Headers
        [{ 'align': [] }],                               // Text alignment
        ['link', 'image'],                               // Links and Images
        ['clean']                                        // Remove formatting
    ];

    // Initialize Quill editor
    const quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: toolbarOptions
        }
    });

    // Sync Quill content with hidden input
    document.querySelector('#carForm').addEventListener('submit', function() {
        const descriptionInput = document.querySelector('#description');
        descriptionInput.value = quill.root.innerHTML;
    });
</script>

@endsection
