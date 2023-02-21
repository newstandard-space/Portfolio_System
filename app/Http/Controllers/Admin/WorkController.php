<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\WorkRequest;
use App\Models\Work;
use App\Models\WorkImage;

use Carbon\Carbon;

class WorkController extends Controller
{

    public function index()
    {
        $work_list = Work::orderBy('sort')->get();

        return view('admin.work.index', ['work_list' => $work_list]);
    }

    public function create()
    {
        return view('admin.work.create');
    }

    public function store(WorkRequest $request, Work $work_detail)
    {
        $work_detail->title = $request->title;
        $work_detail->description = $request->description;
        $work_detail->sort = Work::max('sort') + 1;
        $work_detail->save();

        return redirect()->route('admin.work.index');
    }

    public function create_images()
    {
        return view('admin.work.create_images');
    }

    public function edit($id)
    {
        $work_detail = Work::find($id);
        return view('admin.work.edit', ['work_detail' => $work_detail]);
    }

    public function edit_images($id)
    {
        $work_detail = Work::find($id);        
        return view('admin.work.edit_images', ['work_detail' => $work_detail]);
    }
    
    public function update(WorkRequest $request)
    {
        $id = $request->id;

        Work::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.work.index');
    }

    public function delete(WorkRequest $request)
    {
        $id = $request->id;

        $work_detail = Work::find($id);

        $work_detail->delete();

        return redirect()->route('admin.work.index');
    }

    public function sort_update(Request $request)
    {
        $id_list = $request->id_list;

        $sort = 1;

        foreach ($id_list as $id) {
            Work::find($id)->update([
                'sort' => $sort,
                'updated_at' => Carbon::now(),
            ]);

            $sort ++;
        }

        return response()->json(true);
    }
}