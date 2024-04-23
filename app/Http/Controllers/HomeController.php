<?php

namespace App\Http\Controllers;

use App\Models\admin\Home;
use App\Models\admin\Settings;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::first();
        return view('pages.Home.home', compact('home'));
    }
}
