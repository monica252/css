<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilesController extends Controller
{
    public function edit()
    {
        return view('admin.profile.edit');
       // return view('admin.news.create');
    }
}