<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AboutDetail;

class AboutController extends Controller
{
    public function index()
    {
        $about_detail_list = AboutDetail::orderBy('sort')->get();

        return view('front.about.index', ['about_detail_list' => $about_detail_list]);
    }
}