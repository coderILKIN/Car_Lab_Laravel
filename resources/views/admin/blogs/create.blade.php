@extends('layouts.admin')

@section('title', 'Blog-Create')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">@lang('blogs') @lang('create')</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-info">@lang('list')</a>
        </div>

        <div class="container">

            <form action="{{ route('admin.blogs.store') }}" method="POST" class="mt-4" enctype="multipart/form-data">
                @csrf <!-- CSRF Token -->

                <!-- Kateqoriya -->
                <div class="form-group">
                    <label for="category_id">@lang('category')</label>
                    <select
                        class="form-control @error('category_id') is-invalid @enderror"
                        id="category_id"
                        name="category_id"
                        required>
                        <option value="" disabled selected>@lang('Select category')</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Başlıq (az) -->
                <div class="form-group">
                    <label for="title_az">@lang('title az')</label>
                    <input
                        type="text"
                        class="form-control @error('title[az]') is-invalid @enderror"
                        id="title_az"
                        name="title[az]"
                        value="{{ old('title[az]') }}"
                        placeholder="@lang('Enter title in Azerbaijani')">
                    @error('title[az]')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Başlıq (en) -->
                <div class="form-group">
                    <label for="title_en">@lang('title en')</label>
                    <input
                        type="text"
                        class="form-control @error('title[en]') is-invalid @enderror"
                        id="title_en"
                        name="title[en]"
                        value="{{ old('title[en]') }}"
                        placeholder="@lang('Enter title in English')">
                    @error('title[en]')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Təsvir (az) -->
                <div class="form-group">
                    <label for="description_az">@lang('description az')</label>
                    <textarea
                        class="form-control @error('description[az]') is-invalid @enderror"
                        id="description_az"
                        name="description[az]"
                        placeholder="@lang('Enter description in Azerbaijani')">{{ old('description[az]') }}</textarea>
                    @error('description[az]')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Təsvir (en) -->
                <div class="form-group">
                    <label for="description_en">@lang('description en')</label>
                    <textarea
                        class="form-control @error('description[en]') is-invalid @enderror"
                        id="description_en"
                        name="description[en]"
                        placeholder="@lang('Enter description in English')">{{ old('description[en]') }}</textarea>
                    @error('description[en]')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Şəkil -->
                <div class="form-group">
                    <label for="image">@lang('image')</label>
                    <input
                        type="file"
                        class="form-control-file @error('image') is-invalid @enderror"
                        id="image"
                        name="image">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Status -->
                <div class="form-group">
                    <label for="status">@lang('status')</label>
                    <select
                        class="form-control @error('status') is-invalid @enderror"
                        id="status"
                        name="status"
                        required>
                        <option value="" disabled selected>@lang('Select status')</option>
                        <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>@lang('Active')</option>
                        <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>@lang('Passive')</option>
                    </select>
                    @error('status')
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
