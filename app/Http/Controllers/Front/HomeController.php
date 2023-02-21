<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AboutDetail;
use App\Models\Work;

class HomeController extends Controller
{
    public function index()
    {
        $about_detail = AboutDetail::orderBy('sort')->first();
        $work = Work::orderBy('sort')->first();

        return view('front.index', ['about_detail' => $about_detail, 'work' => $work]);
    }
}