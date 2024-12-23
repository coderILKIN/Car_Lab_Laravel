<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){

        $cars = Car::where('availablity', 1)->get();

        return view('front.home', compact('cars'));
        
    }


    public function about(){

        return view('front.about');
        
    }

    public function cars() {

        $cars = Car::where('availablity', 1)->paginate(3);

        return view('front.cars', compact('cars'));
        
    }

    public function car(string $id) {
        $car = Car::find($id);
        $services = Service::whereStatus(1)->get();
        $car_services = json_decode($car->services);
        $comments = Comment::where('car_id', $id)->get();
        return view('front.car', compact('car', 'services', 'car_services', 'comments'));
    }

    public function contact() {

        return view('front.contact');
        
    }


    public function blogs() {

        $blogs = Blog::whereStatus(1)->orderBy('id', 'DESC')->paginate(3);
        return view('front.blogs', compact('blogs'));
        
    }

    public function blog(Blog $blog) {

        $categories = Category::whereStatus(1)->orderBy('id', 'DESC')->get();
        $recentBlogs = Blog::whereStatus(1)->inRandomOrder()->take(3)->get();
        
        $url = 'https://jsonplaceholder.typicode.com/todos';
        $todos = Http::get($url);
        $todos = json_decode($todos->getBody(), true);

        $todo = $todos[rand(0,199)];

        return view('front.blog', compact('blog','categories','recentBlogs', 'todo'));
        
    }


    public function comment(Request $request, $car_id) {

        $validated = $request->validate([
            'content' => 'required|min:5',
            'rating'  => 'nullable|integer|min:1|max:5'
        ]);

        $validated['user_id'] = Auth::user()->id;
        $validated['car_id'] = $car_id;

        Comment::create($validated);

        return redirect()->back();


        
    }
}
