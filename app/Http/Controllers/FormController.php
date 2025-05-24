<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        //echo "got it";
        return view("form.create");
    }
    public function save(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'std_id' => 'required',
        ]);
        echo $request->first_name;
        echo "<br>";
        echo $request->last_name;
        echo "<br>";
        echo $request->email;
        echo "<br>";
        echo $request->std_id;
        //return $request;
        $student = new Student();
        $student->std_id = $request->std_id;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student-> save();
    }
}
