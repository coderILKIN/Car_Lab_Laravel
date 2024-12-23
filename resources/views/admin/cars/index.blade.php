@extends('layouts.admin')

@section('title', 'Cars')

@section('content')

<div class="container-fluid">


    <h1 class="h3 mb-4 text-gray-800">@lang('cars') @lang('list')</h1>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('admin.cars.create')}}" class="btn btn-info">@lang('create')</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>@lang('image')</th>
                            <th>@lang('make')</th>
                            <th>@lang('model')</th>
                            <th>@lang('year')</th>
                            <th>@lang('price_per_day')</th>
                            <th>@lang('availability')</th>
                            <th>@lang('action')</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($cars as $car)
                        <tr>
                        <td>
                            <img src="{{Storage::url($car->image)}}" alt="{{$car->make}}" width="100">
                        </td>
                            <td>{{$car->make}}</td>
                            <td>{{$car->model}}</td>
                            <td>{{$car->year}}</td>
                            <td>{{$car->price_per_day}}</td>
                            <td>
                                @if($car->availablity)
                                    <span class="badge badge-pill badge-success">Available</span>
                                @else
                                    <span class="badge badge-pill badge-danger">Not Available</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('admin.cars.edit', ['id' => $car->id])}}" class="btn btn-info">Edit</a>
                                <a href="{{route('admin.cars.destroy', ['id' => $car->id])}}" class="btn btn-danger" onclick="confirm('Are you sure to Delete?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<x-admin.alert />

@endsection