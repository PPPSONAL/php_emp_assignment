<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Employee;
use App\Models\Employees;
use App\Models\Departments;
use App\Http\Requests;
use Validator;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp = Employees::all();
        return Employee::collection($emp);
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
            'emp_name'=>'required|min:4|max:20',
            'email' => 'required|email|unique:employees,email',
            'address'=>'required',
            'contact'=>'required',
            'job_profile'=>'required|min:6|max:50',
            'depId'=>'required',
            
        ];
        $validation = Validator::make($data,$rules);
        
        if($validation->fails()){
            return response($validation->messages(),422);
        }
        $emp = Employees::create($data);
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
        $emp = Employees::where('_id',$id)->get();
        return Employee::collection($emp);
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
            'emp_name'=>'required|min:4|max:20',
            'address'=>'required',
            'contact'=>'required',
            'job_profile'=>'required|min:6|max:50',
            'depId'=>'required',
            
        ];
        if($request->method() == 'PUT'){
            $rules['email'] = ['required','email',Rule::unique('employees')->ignore(request()->segment(2),'_id')];
        }
        $validation = Validator::make($data,$rules);
        
        if($validation->fails()){
            return response($validation->messages(),422);
        }
        $emp = Employees::where('_id',$id)->update($data);
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
        Employees::where('_id',$id)->delete();
        return response(['message'=>'Deleted Successfully'],200);
    }

    public function empByDepartment() {
        $emp = Departments::with('employees')->get();
        return Employee::collection($emp);
    }
}
