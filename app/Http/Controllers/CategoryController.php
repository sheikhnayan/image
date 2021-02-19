<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Category::all();
        return view('admin.category.categories',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $name = $request->image->getClientOriginalName();
 
        $path = $request->image->storeAs('public/files',$name);
        $cat = Category::create([
            'name' => $request->name,
            'img' => $name
         ]);
        
         return redirect('admin/categories')->with('message', 'IT WORKS!');

 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fetch = Category::where('id', $id)->first();

        return view('admin.category.edit',compact('fetch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (empty($request->image)) {
            $fetch = Category::where('id', $id)->first();

            $chane = Category::where('id', $id)->update([
                'name' => $request->name,
                'img' => $fetch->img
            ]);
        }else {
            $name = $request->image->getClientOriginalName();
            $chane = Category::where('id', $id)->update([
                'name' => $request->name,
                'img' => $name
            ]);
        }

        return redirect('admin/categories')->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Category::where('id',$id)->delete();

        return redirect('admin/categories')->with('message', 'Deleted Successfully');
    }
}
