@extends('layouts.admin')

@section('title', 'Cars')

@section('content')

<div class="container-fluid">


    <h1 class="h3 mb-4 text-gray-800">@lang('services') @lang('list')</h1>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('admin.service.create')}}" class="btn btn-info">@lang('create')</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>@lang('name')</th>
                            <th>@lang('status')</th>
                            <th>@lang('action')</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($services as $service)
                        <tr>
                        
                            <td>{{$service->name}}</td>
                            
                            
                            <td>
                                @if($service->status)
                                    <span class="badge badge-pill badge-success">Active</span>
                                @else
                                    <span class="badge badge-pill badge-danger">Passive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('admin.service.edit', ['id' => $service->id])}}" class="btn btn-info">Edit</a>
                                <a href="{{route('admin.service.destroy', ['id' => $service->id])}}" class="btn btn-danger" onclick="confirm('Are you sure to Delete?')">Delete</a>
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