@extends('layouts.app')


@section('content')


@include('front.partials.breadcrump', ['title' => 'Contact'], ['title2' => 'Contact Us'])

<section class="ftco-section contact-section">
  <div class="container">
    <!-- @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif -->
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-4">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border w-100 p-4 rounded mb-2 d-flex">
              <div class="icon mr-3">
                <span class="icon-map-o"></span>
              </div>
              <p><span>Address:</span>{{$setting->address}}</p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="border w-100 p-4 rounded mb-2 d-flex">
              <div class="icon mr-3">
                <span class="icon-mobile-phone"></span>
              </div>
              <p><span>Phone:</span> <a href="tel://1234567920">{{$setting->phone}}</a></p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="border w-100 p-4 rounded mb-2 d-flex">
              <div class="icon mr-3">
                <span class="icon-envelope-o"></span>
              </div>
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">{{$setting->email}}</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 block-9 mb-md-5">
        <form action="{{route('app.contact.store')}}" method="POST" class="bg-light p-5 contact-form">
          @csrf
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Your Name">
            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Your Email">
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="Subject">
            @error('subject')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            @error('message')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>

      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div id="map" class="bg-white"></div>
      </div>
    </div>
  </div>
</section>



@endsection


@section('customJs')

@if(session('success'))
   <script>
     Swal.fire({
       title: 'OK!',
       text: '{{session("success")}}',
       icon: 'success',
       confirmButtonText: 'Cool',
       timer: 1500
       })
   </script>
@endif


@endsection