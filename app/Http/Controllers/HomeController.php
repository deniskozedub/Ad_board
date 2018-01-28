<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{


    public function index(Ad $ads)
    {
        return view('home')->with([
            "ads" => $ads->latest('id')->paginate(5)
        ]);


    }

}