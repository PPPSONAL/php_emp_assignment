<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Department;
use App\Models\Departments;
use App\Http\Requests;
use Validator;
use Illuminate\Validation\Rule;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Departments::all();
        return Department::collection($departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $rules = [
            'dep_name'=>'required|min:4|max:20|unique:departments'
            
        ];
        $validation = Validator::make($data,$rules);
        
        if($validation->fails()){
            return response($validation->messages(),422);
        }
        $department = Departments::create($data);
        return response(['message'=>'Saved Successfully'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Departments::where('_id',$id)->get();
        return Department::collection($department);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = $request->all();
        $rules = [
            'dep_name' => ['required','min:4','max:20',Rule::unique('departments')->ignore(request()->segment(2),'_id')]
        ];
        $validation = Validator::make($data,$rules);
        
        if($validation->fails()){
            return response($validation->messages(),422);
        }
        $department = Departments::where('_id',$id)->update($data);
        return response(['message'=>'Updated Successfully'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Departments::where('_id',$id)->delete();
        return response(['message'=>'Deleted Successfully'],200);
    }
}
