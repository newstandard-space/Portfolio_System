<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Work;

class WorkController extends Controller
{
    public function index()
    {
        $work_list = Work::orderBy('sort')->get();

        return view('front.work.index', ['work_list' => $work_list]);
    }
}