<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::all();
        return response()->json($setting);
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
        $setting = Setting::create([
            'name'=>$request->name,
            'value' => $request->value,
            'status' =>$status
        ]);
        if(!empty($setting)){
            $data['massege']= 'Setting Add Successfully';
            $data['status']= 200;
            return response()->json($data);
        }
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
        $editSetting = Setting::findOrfail($id);
        return response()->json($editSetting);
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
        $setting = Setting::where('id',$id)->update([
            'name'=>$request->name,
            'value' => $request->value,
            'status' =>$status
        ]);
        if(!empty($setting)){
            $data['status'] = 200;
            $data['massege']= 'Setting Updated Successfully';
            return response()->json($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delSetting = Setting::findOrfail($id);
        $delSetting->delete();
        $data['massege']= 'Setting Deleted Successfully';
        return response()->json($data);
    }
}
