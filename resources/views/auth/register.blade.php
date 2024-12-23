@extends('layouts.app')


@section('content')



<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 block-9 mb-md-5">
                <form action="{{route('app.registerPost')}}" method="POST" enctype="multipart/form-data" class="bg-light p-5 contact-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                        @error('name')
                             <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email">
                        @error('email')
                             <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone">
                        @error('phone')
                             <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        @error('password')
                             <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirim Password">
                    </div>
                    <div class="form-group">
                        <input type="file" name="avatar">
                        @error('avatar')
                             <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                   
                    <div class="form-group">
                        <input type="submit" value="Register" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>
        </div>

    </div>
</section>





@endsection