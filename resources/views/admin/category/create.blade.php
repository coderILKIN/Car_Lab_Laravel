@extends('layouts.admin')

@section('title', 'Category-Create')


@section('content')

<div class="container-fluid">


    <h1 class="h3 mb-4 text-gray-800">@lang('categories') @lang('create')</h1>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('admin.categories.index')}}" class="btn btn-info">@lang('list')</a>
        </div>


        <div class="container">


            <form action="{{route('admin.categories.store')}}" method="POST" class="mt-4" enctype="multipart/form-data">
                @csrf <!-- CSRF Token -->


                <div class="form-group">
                    <label for="name_az">@lang('name az')</label>
                    <input
                        type="text"
                        class="form-control @error('name[az]') is-invalid @enderror"
                        id="name_az"
                        name="name[az]"
                        value="{{ old('name[az]') }}"
                        placeholder="@lang('Enter name')">
                    @error('name[az]')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="name_en">@lang('name en')</label>
                    <input
                        type="text"
                        class="form-control @error('name[en]') is-invalid @enderror"
                        id="name_en"
                        name="name[en]"
                        value="{{ old('name[en]') }}"
                        placeholder="@lang('Enter name')">
                    @error('name[en]')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                

                <!-- Availability -->
                <div class="form-group">
                    <label for="availablity">@lang('status')</label>
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