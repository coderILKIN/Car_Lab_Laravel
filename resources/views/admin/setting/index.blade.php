@extends('layouts.admin')

@section('title', 'Settings')


@section('content')

<div class="container-fluid">


    <h1 class="h3 mb-4 text-gray-800">@lang('settings')</h1>


    <div class="card shadow mb-4">

        <div class="container">


            <form action="{{route('admin.setting.update')}}" method="POST" class="mt-4" enctype="multipart/form-data">
                @csrf <!-- CSRF Token -->

                <!-- Title -->
                <div class="form-group">
                    <label for="title">Title</label>
                    <input
                        type="text"
                        class="form-control @error('title') is-invalid @enderror"
                        id="title"
                        name="title"
                        value="{{ $settings->title ?? '' }}"
                        placeholder="Enter title">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Company Name -->
                <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input
                        type="text"
                        class="form-control @error('company_name') is-invalid @enderror"
                        id="company_name"
                        name="company_name"
                        value="{{ $settings->company_name ?? '' }}"
                        placeholder="Enter company name">
                    @error('company_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea
                        class="form-control @error('description') is-invalid @enderror"
                        id="description"
                        name="description"
                        placeholder="Enter description">{{ $settings->description ?? '' }}</textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Phone -->
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input
                        type="text"
                        class="form-control @error('phone') is-invalid @enderror"
                        id="phone"
                        name="phone"
                        value="{{ $settings->phone ?? '' }}"
                        placeholder="Enter phone">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        id="email"
                        name="email"
                        value="{{ $settings->email ?? '' }}"
                        placeholder="Enter email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Address -->
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea
                        class="form-control @error('address') is-invalid @enderror"
                        id="address"
                        name="address"
                        placeholder="Enter address">{{ $settings->address ?? '' }}</textarea>
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Meta Title -->
                <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <input
                        type="text"
                        class="form-control @error('meta_title') is-invalid @enderror"
                        id="meta_title"
                        name="meta_title"
                        value="{{ $settings->meta_title ?? '' }}"
                        placeholder="Enter meta title">
                    @error('meta_title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Meta Description -->
                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <input
                        type="text"
                        class="form-control @error('meta_description') is-invalid @enderror"
                        id="meta_description"
                        name="meta_description"
                        value="{{ $settings->meta_description ?? '' }}"
                        placeholder="Enter meta description">
                    @error('meta_description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Meta Keywords -->
                <div class="form-group">
                    <label for="meta_keywords">Meta Keywords</label>
                    <input
                        type="text"
                        class="form-control @error('meta_keywords') is-invalid @enderror"
                        id="meta_keywords"
                        name="meta_keywords"
                        value="{{ $settings->meta_keywords ?? '' }}"
                        placeholder="Enter meta keywords">
                    @error('meta_keywords')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- About Description -->
                <div class="form-group">
                    <label for="about_description">About Description</label>
                    <textarea
                        class="form-control @error('about_description') is-invalid @enderror"
                        id="about_description"
                        name="about_description"
                        placeholder="Enter about description">{{ $settings->about_description ?? '' }}</textarea>
                    @error('about_description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- About Image -->
                <div class="form-group">
                    <label for="about_image">About Image</label>
                    <input
                        type="file"
                        class="form-control @error('about_image') is-invalid @enderror"
                        id="about_image"
                        name="about_image">
                    @error('about_image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="breadcrump_image">Breadcrump Image</label>
                    <input
                        type="file"
                        class="form-control @error('breadcrump_image') is-invalid @enderror"
                        id="breadcrump_image"
                        name="breadcrump_image">
                    @error('breadcrump_image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="slider_image">Slider Image</label>
                    <input
                        type="file"
                        class="form-control @error('slider_image') is-invalid @enderror"
                        id="slider_image"
                        name="slider_image">
                    @error('slider_image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Social Media Links -->
                <div class="form-group">
                    <label for="whatsapp">WhatsApp</label>
                    <input
                        type="text"
                        class="form-control @error('whatsapp') is-invalid @enderror"
                        id="whatsapp"
                        name="whatsapp"
                        value="{{ $settings->whatsapp ?? '' }}"
                        placeholder="Enter WhatsApp link">
                    @error('whatsapp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input
                        type="text"
                        class="form-control @error('twitter') is-invalid @enderror"
                        id="twitter"
                        name="twitter"
                        value="{{ $settings->twitter ?? '' }}"
                        placeholder="Enter Twitter link">
                    @error('twitter')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input
                        type="text"
                        class="form-control @error('facebook') is-invalid @enderror"
                        id="facebook"
                        name="facebook"
                        value="{{ $settings->facebook ?? '' }}"
                        placeholder="Enter Facebook link">
                    @error('facebook')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input
                        type="text"
                        class="form-control @error('instagram') is-invalid @enderror"
                        id="instagram"
                        name="instagram"
                        value="{{ $settings->instagram ?? '' }}"
                        placeholder="Enter Instagram link">
                    @error('instagram')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Google Map -->
                <div class="form-group">
                    <label for="google_map">Google Map</label>
                    <textarea
                        class="form-control @error('google_map') is-invalid @enderror"
                        id="google_map"
                        name="google_map"
                        placeholder="Enter Google Map embed code">{{ $settings->google_map ?? '' }}</textarea>
                    @error('google_map')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>




        </div>


    </div>

</div>


<x-admin.alert />

@endsection