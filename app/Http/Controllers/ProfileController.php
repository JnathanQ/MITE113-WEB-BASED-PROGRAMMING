<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Jonathan Quero',
            'program' => 'Information Technology',
            'year' => '1st year',
            'skills' => ['PHP','Wordpress','CSS'],
            'career_goals' => 'To become a good programmer.',
        ];

        return view('profiles.index', compact('profile'));
    }
}

