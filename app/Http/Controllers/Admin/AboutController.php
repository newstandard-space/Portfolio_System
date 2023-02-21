<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\AboutDetailRequest;
use App\Models\AboutDetail;
use App\Models\AboutDetailImage;

use Carbon\Carbon;

class AboutController extends Controller
{
    public function index()
    {
        $about_detail_list = AboutDetail::orderBy('sort')->get();

        return view('admin.about.index', ['about_detail_list' => $about_detail_list]);
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(AboutDetailRequest $request, AboutDetail $about_detail)
    {
        $about_detail->title = $request->title;
        $about_detail->description = $request->description;
        $about_detail->sort = AboutDetail::max('sort') + 1;
        $about_detail->save();

        return redirect()->route('admin.about.index');
    }

    public function create_images()
    {
        return view('admin.about.create_images');
    }

    public function edit($id)
    {
        $about_detail = AboutDetail::find($id);
        return view('admin.about.edit', ['about_detail' => $about_detail]);
    }

    public function edit_images($id)
    {
        $about_detail = AboutDetail::find($id);        
        return view('admin.about.edit_images', ['about_detail' => $about_detail]);
    }
    
    public function update(AboutDetailRequest $request)
    {
        $id = $request->id;

        AboutDetail::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.about.index');
    }

    public function delete(AboutDetailRequest $request)
    {
        $id = $request->id;

        $about_detail = AboutDetail::find($id);

        $about_detail->delete();

        return redirect()->route('admin.about.index');
    }

    public function sort_update(Request $request)
    {
        $id_list = $request->id_list;

        $sort = 1;

        foreach ($id_list as $id) {
            AboutDetail::find($id)->update([
                'sort' => $sort,
                'updated_at' => Carbon::now(),
            ]);

            $sort ++;
        }

        return response()->json(true);
    }
}