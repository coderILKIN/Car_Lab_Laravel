@extends('layouts.app')


@section('customCss')

<style>
    .rating {
    display: flex;
    font-size: 2rem;
    color: #ccc; /* Başlanğıcda ulduzlar solğun olur */
    cursor: pointer;
}

.rating i {
    transition: color 0.3s ease;
}

.rating i:hover {
    color: #ffcc00; /* Hover zamanı ulduzların konturu sarıya boyanır */
}

.rating .selected {
    color: #ffcc00; /* Seçilmiş ulduz sarıya boyanır */
}


</style>


@endsection

@section('content')


@include('front.partials.breadcrump', ['title' => $car->make], ['title2' => $car->model])


<section class="ftco-section ftco-car-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="car-details">
                    <div class="img rounded" style="background-image: url('{{Storage::url($car->image)}}');"></div>
                    <div class="text text-center">
                        <span class="subheading">{{$car->make}}</span>
                        <h2>{{$car->model}}</h2>
                        <h3>@lang('price_per_day') : {{$car->price_per_day}} $</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Mileage
                                    <span>40,000</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Transmission
                                    <span>Manual</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Seats
                                    <span>5 Adults</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Luggage
                                    <span>4 Bags</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Fuel
                                    <span>Petrol</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pills">
                <div class="bd-example bd-example-tabs">
                    <div class="d-flex justify-content-center">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="features">

                                        @if($car_services)

                                        @foreach($services as $service)
                                        @php
                                        $exists = in_array($service->id, $car_services);
                                        @endphp

                                        @if($exists)
                                        <li class="check">
                                            <span class="ion-ios-checkmark"></span>{{ $service->name }}
                                        </li>
                                        @else
                                        <li class="remove">
                                            <span class="ion-ios-close"></span>{{ $service->name }}
                                        </li>
                                        @endif
                                        @endforeach


                                        @endif



                                        <!-- <li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Music</li> -->
                                    </ul>
                                </div>
                                <!-- <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
                                        <li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Water</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
                                        <li class="remove"><span class="ion-ios-close"></span>Onboard computer</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Remote central locking</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Climate control</li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                            {!! $car->description !!}
                        </div>

                        <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="head">23 Reviews</h3>
                                    @foreach($comments as $comment)
                                    <div class="review d-flex">
                                        <div class="user-img" style="background-image: url('{{ Storage::url($comment->user->avatar) }}')"></div>
                                        <div class="desc">
                                            <h4>
                                                <span class="text-left">{{$comment->user->name}}</span>
                                                <span class="text-right">{{$comment->created_at->toFormattedDateString()}}</span>
                                            </h4>
                                            <p class="star">
                                                <span>
                                                    @for($i = 0; $i < $comment->rating; $i++)
                                                    <i class="ion-ios-star"></i>
                                                    @endfor
                                                </span>
                                            </p>
                                            <p>{{$comment->content}}</p>
                                        </div>
                                    </div>

                                    @endforeach

                                    <div class="row">
                                        <div class="col-12">
                                            <form action="{{ route('app.comment', ['car_id' => $car->id]) }}" method="POST">
                                                @csrf
                                                <!-- Şərh Sahəsi -->
                                                <div class="form-group">
                                                    <label for="content">Şərhiniz:</label>
                                                    <textarea class="form-control @error('content') is-invalid @enderror"
                                                        name="content" id="content"
                                                        placeholder="Şərhinizi buraya yazın" style="height: 100px">{{ old('content') }}</textarea>
                                                    @error('content')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Qiymətləndirmə Sahəsi -->
                                                <div id="rating" class="rating mt-3">
                                                    <label>Qiymətləndirmə:</label>
                                                    <i class="fa fa-star" data-value="1"></i>
                                                    <i class="fa fa-star" data-value="2"></i>
                                                    <i class="fa fa-star" data-value="3"></i>
                                                    <i class="fa fa-star" data-value="4"></i>
                                                    <i class="fa fa-star" data-value="5"></i>
                                                    <input type="hidden" name="rating" id="rating-input" value="{{ old('rating', 0) }}">
                                                    @error('rating')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Ulduz Qiymətləndirmə Dəyəri -->
                                                <p>Seçim: <span id="rating-value">{{ old('rating', 0) }}</span></p>

                                                <!-- Submit Button -->
                                                <button type="submit" class="btn btn-primary mt-3">Göndər</button>
                                            </form>


                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-5">
                                    <div class="rating-wrap">
                                        <h3 class="head">Give a Review</h3>
                                        <div class="wrap">
                                            <p class="star">
                                                <span>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    (98%)
                                                </span>
                                                <span>20 Reviews</span>
                                            </p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection



@section('customJs')

<script>
   document.querySelectorAll('#rating i').forEach((star, index) => {
    star.addEventListener('click', function () {
        // Tıklanan ulduzun 'selected' sinfini əlavə et
        this.classList.add('selected');

        // Input-a seçilən dəyəri yaz
        const ratingValue = index + 1; // Seçilən ulduzun sırası
        document.getElementById('rating-input').value = ratingValue;
        document.getElementById('rating-value').textContent = `Seçim: ${ratingValue}`;
    });
});


</script>


@endsection