@extends('layouts.admin')

@section('title', 'Cars-Edit')

@section('content')

<div class="container-fluid">


    <h1 class="h3 mb-4 text-gray-800">@lang('cars') @lang('edit')</h1>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('admin.cars.index')}}" class="btn btn-info">@lang('list')</a>
        </div>


        <div class="container">


            <form action="{{route('admin.cars.update', ['id' => $car->id])}}" method="POST" class="mt-4" enctype="multipart/form-data">
                @csrf <!-- CSRF Token -->

                <!-- Make -->
                <div class="form-group">
                    <label for="make">@lang('make')</label>
                    <input
                        type="text"
                        class="form-control @error('make') is-invalid @enderror"
                        id="make"
                        name="make"
                        value="{{$car->make}}"
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
                        value="{{$car->model}}"
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
                        value="{{$car->year}}"
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
                        value="{{$car->price_per_day}}"
                        placeholder="@lang('Enter price per day')"
                        step="0.01"
                        required>
                    @error('price_per_day')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="image">@lang('image')</label>
                    <input
                        type="file"
                        class="form-control @error('image') is-invalid @enderror"
                        id="image"
                        name="image"
                        placeholder="@lang('Enter price per day')"
                        step="0.01">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



                <div class="form-group">
                    <img src="{{Storage::url($car->image)}}" alt="{{$car->make}}" width="100">
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
                        <option value="1" {{ $car->availablity == '1' ? 'selected' : '' }}>@lang('Available')</option>
                        <option value="0" {{ $car->availablity == '0' ? 'selected' : '' }}>@lang('Unavailable')</option>
                    </select>
                    @error('availablity')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <!-- Submit Button -->
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">@lang('Update')</button>
                </div>
            </form>


        </div>


    </div>

</div>


@endsection