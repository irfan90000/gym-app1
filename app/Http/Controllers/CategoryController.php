<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->status == true){
            $status = 1;
        }else{
            $status = 0;
        }
        $category  = Category::create([
            'name' => $request->name,
            'status' => $status
        ]);
        if(!empty($category)){
            $data['status'] = 200;
            $data['massege'] = 'Category Added Successfully';
        }
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editCategory = Category::findOrfail($id);
        return response()->json($editCategory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->status == true){
            $status = 1;
        }else{
            $status = 0;
        }
        $category  = Category::where('id',$id)->update([
            'name' => $request->name,
            'status' => $status
        ]);
        if(!empty($category)){
            $data['massege'] = 'Category Updated Successfully';
            $data['status'] = '200';
        }
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delCategory = Category::findOrfail($id);
        $delCategory->delete();
        $data['massege'] = 'Delete ';
        return response()->json($delCategory);
    }
}
