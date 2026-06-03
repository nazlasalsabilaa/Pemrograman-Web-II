<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Profile::getData();

        return view('beranda', compact('profile'));
    }
}