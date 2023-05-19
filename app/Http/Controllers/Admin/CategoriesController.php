<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories\Categories;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class CategoriesController extends Controller
{
    public function create(){
        return view('admin.categories.categories_create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255','unique:Categories,name'],
            'slug' => ['required', 'string'],
            'status' => 'required', Rule::in(['0','1']),
        ]); 
        if (!empty($request->id)) {
            $data= Categories::find($request->id);
    }else{
        $data = new Categories();

    }
        $data->name= $request->name;
        $data->slug= $request->slug;
        $data->status= $request->status;
        $data->save();
        return redirect()->route('admin.all.categories.show');
    }
    public function show(){
        $categories= Categories::all();
        $data = compact('categories');
        return view(' admin.categories.categories_list',$data);
    }
    public function edit($id){
        if (!empty($id)) {
            $categories= Categories::find($id);
            if (!empty($categories)) {            
                $data = compact('categories');
                return view('admin.categories.categories_create ',$data);                
            }
            return redirect()->back()->with('Categories Not Find');
        }else{
            return redirect()->back()->with('Plz Select Record!');

        }

    }

       
}
