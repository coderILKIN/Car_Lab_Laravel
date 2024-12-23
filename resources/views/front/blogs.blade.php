@extends('layouts.app')


@section('content')

@include('front.partials.breadcrump', ['title' => 'Blogs'], ['title2' => 'Our Blog'])

<section class="ftco-section">
  <div class="container">
    <div class="row d-flex justify-content-center">
      @foreach($blogs as $blog)
      <div class="col-md-12 text-center d-flex ftco-animate">
        <div class="blog-entry justify-content-end mb-md-5">
          <a href="{{route('app.blog', ['blog' => $blog->slug])}}" class="block-20 img" style="background-image: url('{{Storage::url($blog->image)}}');">
          </a>
          <div class="text px-md-5 pt-4">
            <div class="meta mb-3">
              <div><a href="#">{{$blog->created_at->format('Y-m-d')}}</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-2"><a href="{{route('app.blog', ['blog' => $blog->slug])}}">{{$blog->title}}</a></h3>
            <p>{{Str::limit($blog->description, 100)}}</p>
            <p><a href="{{route('app.blog', ['blog' => $blog->slug])}}" class="btn btn-primary">Continue <span class="icon-long-arrow-right"></span></a></p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            @if ($blogs->onFirstPage())
            <li class="disabled"><span>&lt;</span></li>
            @else
            <li><a href="{{ $blogs->previousPageUrl() }}">&lt;</a></li>
            @endif

            @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
            @if ($page == $blogs->currentPage())
            <li class="active"><span>{{ $page }}</span></li>
            @else
            <li><a href="{{ $url }}">{{ $page }}</a></li>
            @endif
            @endforeach

            @if ($blogs->hasMorePages())
            <li><a href="{{ $blogs->nextPageUrl() }}">&gt;</a></li>
            @else
            <li class="disabled"><span>&gt;</span></li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection