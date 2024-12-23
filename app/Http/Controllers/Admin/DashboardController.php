<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        $carsCount = Car::count();
        $usersCount = User::count();


        return view('admin.dashboard', compact('carsCount', 'usersCount'));
        
    }
}
