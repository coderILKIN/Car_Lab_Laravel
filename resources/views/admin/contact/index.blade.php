@extends('layouts.admin')

@section('title', 'Contact Messages')

@section('content')

<div class="container-fluid">


    <h1 class="h3 mb-4 text-gray-800">@lang('messages') @lang('list')</h1>


    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>@lang('name')</th>
                            <th>@lang('email')</th>
                            <th>@lang('subject')</th>
                            <th>@lang('message')</th>
                            <th>@lang('status')</th>
                            <th>@lang('action')</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                       
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->subject}}</td>
                            <td>{{$contact->message}}</td>
                            <td>
                                @if($contact->status)
                                    <span class="badge badge-pill badge-success">Oxundu</span>
                                @else
                                    <span class="badge badge-pill badge-danger">Oxunmadi</span>
                                @endif
                            </td>
                            <td>
                                @if(!$contact->status)
                                <a href="{{route('admin.contact.read', ['id' => $contact->id])}}" class="btn btn-success" onclick="confirm('Are you sure to Update?')">Change Status</a>
                                @endif
                                <a href="{{route('admin.contact.destroy', ['id' => $contact->id])}}" class="btn btn-danger" onclick="confirm('Are you sure to Delete?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


@endsection