<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class DepartmentController extends Controller
{

    public function index()
    {
        $departments = Department::paginate(4);
        return view('departments.index')->with('departments', $departments);
    }

    public function create()
    {
        return view('departments.create');
    }
    public function storeDepartment(Request $request)
    {
        //dd('Ok');
        $this->validate($request, [
            'user_id' => 'required',
            'department_name' => 'required',
        ]);
        $department = new Department();
        $department->user_id = $request->user_id;
        $department->department_name = $request->department_name;

        $department->save();
        return redirect()->route('departments.index')->with('message','Data saved in database successfully');
    }

    public function showDepartmentSingleData(Department $department, $id)
    {
        //        echo 'show';
        $department = Department::find($id);
        return view('departments.show')->with('department', $department);
    }
    public function edit(Department $department, $id)
    {
        //        echo 'show';
        $department = Department::find($id);

        $users = User::all()->where('id', '=', $department->user_id);
        return view('departments.edit', compact('users'))->with('department', $department);
    }
    public function updateDepartment(Request $request, Department $department, $id)
    {
        $department = Department::find($id);

        $department->user_id = $request->user_id;
        $department->department_name = $request->department_name;
        $department->department_position = $request->department_position;



        $department->update();
        return redirect()->back()->with('message', 'Data updated in database successfully');
    }
    public function destroyDepartment(Department $department, $id){
        $department = Department::find($id);
        $department->delete();
        return redirect()->back()->with('message', 'Data deleted successfully');
    }
}
