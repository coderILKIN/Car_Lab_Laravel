@extends('layouts.app')


@section('content')


@include('front.partials.breadcrump', ['title' => 'Profile'], ['title2' => 'Profile Us'])

    <section class="ftco-section contact-section">
      <div class="container">

        <div class="row d-flex justify-content-center">
            <div class="col-12">
                Hello: {{$user->name}}
            </div>

            <div>
              <img src="{{Storage::url($user->avatar)}}" alt="{{$user->name}}" width="100">
            </div>

        </div>

        <a href="{{route('app.logout')}}">Logout</a>


     
   
      </div>
    </section>





@endsection