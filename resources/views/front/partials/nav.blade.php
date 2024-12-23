<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('app.home')}}">Car<span>Book</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{\App\Helpers\Helper::isActiveMenu('/')}}"><a href="{{route('app.home')}}" class="nav-link">@lang('home')</a></li>
                <li class="nav-item {{\App\Helpers\Helper::isActiveMenu('about')}}"><a href="{{route('app.about')}}" class="nav-link">@lang('about')</a></li>
                <li class="nav-item {{\App\Helpers\Helper::isActiveMenu('cars')}}"><a href="{{route('app.cars')}}" class="nav-link">@lang('cars')</a></li>
                <li class="nav-item {{\App\Helpers\Helper::isActiveMenu('blogs')}}"><a href="{{route('app.blogs')}}" class="nav-link">@lang('blog')</a></li>
                <li class="nav-item {{\App\Helpers\Helper::isActiveMenu('contact')}}"><a href="{{route('app.contact')}}" class="nav-link">@lang('contact')</a></li>
                <li class="nav-item "><a href="{{route('changeLang', ['locale' => 'en'])}}" class="nav-link">EN</a></li>
                <li class="nav-item "><a href="{{route('changeLang', ['locale' => 'az'])}}" class="nav-link">AZ</a></li>
               
                @guest
                    <li class="nav-item {{\App\Helpers\Helper::isActiveMenu('register')}}"><a href="{{route('app.register')}}" class="nav-link">@lang('register')</a></li>
                    <li class="nav-item {{\App\Helpers\Helper::isActiveMenu('login')}}"><a href="{{route('app.login')}}" class="nav-link">@lang('login')</a></li>
                @endguest

                @auth
                    <li class="nav-item {{\App\Helpers\Helper::isActiveMenu('profile')}}"><a href="{{route('app.profile')}}" class="nav-link">@lang('profile')</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>