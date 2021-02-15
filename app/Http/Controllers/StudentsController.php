<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  
    {
         // return view('students.index');

        $students = student::all();  
  
        return view('students.index', compact('students'));
    }  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return view('students.create');
            $this->validate($request, [  
            'first_name'=>'required|alpha|max:25|min:3',
            'last_name'=>'required|alpha|max:25|min:3', 
            'gender'=>'required',  
            'qualifications'=>'required',
        ]);


        $student = new student;
        $student->first_name =  $request->get('first_name');  
        $student->last_name = $request->get('last_name');  
        $student->qualifications = $request->get('qualifications');  
        $student->gender = $request->get('gender');  
        $student->save();

        return redirect('/students/')->with('massage2','Successfully Inserted');
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
        // echo "hello";

        $student = student::find($id);
        return view('students.edit', compact('student'));

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

        $this->validate($request, [  
            'first_name'=>'required|alpha|max:25|min:3',
            'last_name'=>'required|alpha|max:25|min:3', 
            'gender'=>'required',  
            'qualifications'=>'required',
        ]);

        
        // echo "ok";
        $student = student::find($id);  
        $student->first_name =  $request->first_name; 
        $student->last_name = $request->last_name;
        $student->gender = $request->gender;
        $student->qualifications = $request->qualifications;  
        
        $student->save();  
        return redirect('/students/')->with('massage3','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::find($id);
        $student->delete();

        return redirect('/students/')->with('massage','Successfully Deleted');
    }
}
