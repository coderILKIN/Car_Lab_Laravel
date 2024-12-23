@extends('layouts.admin')

@section('title', 'Blogs')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">@lang('blogs') @lang('list')</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('admin.blogs.create') }}" class="btn btn-info">@lang('create')</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>@lang('image')</th>
                            <th>@lang('title')</th>
                            <th>@lang('category')</th>
                            <th>@lang('description')</th>
                            <th>@lang('status')</th> 
                            <th>@lang('action')</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <!-- Şəkil -->
                            <td>
                                @if($blog->image)
                                    <img src="{{Storage::url($blog->image)}}" alt="Blog Image" width="100">
                                @else
                                    <span>-</span>
                                @endif
                            </td>

                            <!-- Başlıq -->
                            <td>{{ $blog->getTranslation('title', app()->getLocale()) }}</td>

                            <!-- Kateqoriya -->
                            <td>{{ $blog->category->name ?? '-' }}</td>

                            <!-- Təsvir -->
                            <td>{{ \Str::limit($blog->getTranslation('description', app()->getLocale()), 50) }}</td>


                             <!-- Status -->
                             <td>
                                @if($blog->status)
                                    <span class="badge badge-pill badge-success">Active</span>
                                @else
                                    <span class="badge badge-pill badge-danger">Passive</span>
                                @endif
                            </td>

                            <!-- Əməliyyatlar -->
                            <td>
                                <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to Delete?')">Delete</button>
                                </form>
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
