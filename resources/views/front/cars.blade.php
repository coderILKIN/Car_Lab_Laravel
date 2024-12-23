@extends('layouts.app')


@section('content')


@include('front.partials.breadcrump', ['title' => 'Cars'], ['title2' => 'Choose your car'])

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">

			@foreach($cars as $car)
			<div class="col-md-4">
				<div class="car-wrap rounded ftco-animate">
					<div class="img rounded d-flex align-items-end" style="background-image: url('{{ Storage::url($car->image) }}');">
					</div>
					<div class="text">
						<h2 class="mb-0"><a href="car-single.html">{{$car->make}}</a></h2>
						<div class="d-flex mb-3">
							<span class="cat">{{$car->model}}</span>
							<p class="price ml-auto">$ {{$car->price_per_day}} <span>/day</span></p>
						</div>
						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> 
						<a href="{{route('app.car', ['id' => $car->id])}}" class="btn btn-secondary py-2 ml-1">Details</a></p>
					</div>
				</div>
			</div>
			@endforeach


		</div>
		<div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
					<ul>
						@if ($cars->onFirstPage())
						<li class="disabled"><span>&lt;</span></li>
						@else
						<li><a href="{{ $cars->previousPageUrl() }}">&lt;</a></li>
						@endif

						@foreach ($cars->getUrlRange(1, $cars->lastPage()) as $page => $url)
						@if ($page == $cars->currentPage())
						<li class="active"><span>{{ $page }}</span></li>
						@else
						<li><a href="{{ $url }}">{{ $page }}</a></li>
						@endif
						@endforeach

						@if ($cars->hasMorePages())
						<li><a href="{{ $cars->nextPageUrl() }}">&gt;</a></li>
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