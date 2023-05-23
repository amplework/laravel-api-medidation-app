<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories\Categories;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class CategoriesController extends Controller
{
    public function create()
    {
        return view('admin.categories.categories_create');
    }
    public function store(Request $request)
    {
        if ($request->id != null) {
            $request->validate([
                'name' => ['required'],
                'slug' => ['required', 'string'],
                'status' => 'required', Rule::in(['0', '1']),
            ]);
        } else {
            $request->validate([
                'name' => ['required', 'string', 'max:255', 'unique:Categories,name'],
                'slug' => ['required', 'string'],
                'status' => 'required', Rule::in(['0', '1']),
            ]);
        }
        $slug = Categories::where("slug", $request->slug)->count();
        if ($slug > 0) {
            $updateslug = $request->slug . "-" . rand(1, 100);
            $request['slug'] = $updateslug;
        }

        if ($request->has('id')) {
            $data = Categories::find($request->id);
        } else {
            $data = new Categories();
        }
        $data->name = $request->name;
        $data->slug = $request->slug;
        $data->status = $request->status;
        $data->save();
        if ($data) {
            if ($request->has('id')) {
                return redirect()->route('admin.all.categories.show')->withSuccess('Categories Update successfully');
            } else {
                return redirect()->route('admin.all.categories.show')->withSuccess('Categories Saved successfully');;
            }
        } else {
            return back()->withFail('Categories Not-Saved Failed!');
        }
    }
    public function show()
    {
        $categories = Categories::all();
        $data = compact('categories');
        return view(' admin.categories.categories_list', $data);
    }
    public function edit($id)
    {
        if (!empty($id)) {
            $categories = Categories::find($id);
            if (!empty($categories)) {
                $data = compact('categories');
                return view('admin.categories.categories_create ', $data);
            }
            return redirect()->back()->with('Categories Not Find');
        } else {
            return redirect()->back()->with('Plz Select Record!');
        }
    }
    public function destroy($id)
    {
        try {
            $data = Categories::find($id);
            $data->delete();         
            return redirect()->back()->withSuccess('Record SuccessFul! Delete');
        } catch (Exception $e) {
            return redirect()->back()->with('Record UnSuccessFul! Delete');
        }
    }
}
