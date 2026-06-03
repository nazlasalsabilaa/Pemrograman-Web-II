<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::getData();

        if (is_string($profile['hobi'])) {
            $profile['hobi'] = explode(',', $profile['hobi']); 
            $profile['hobi'] = array_map('trim', $profile['hobi']); 
        }

        if (is_string($profile['skill'])) {
            $profile['skill'] = explode(',', $profile['skill']);
            $profile['skill'] = array_map('trim', $profile['skill']);
        }

        return view('profil', compact('profile'));
    }
}