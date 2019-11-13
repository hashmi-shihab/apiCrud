<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{

    public function index()
    {
        $stusents = Student::all();

        return response()->json($stusents);
    }

    public function store(Request $request)
    {
        $students =Student::create([
            'fName' => $request->fName,
            'lName' => $request->lName,
            'standard' => $request->standard,
            'pNo' => $request->pNo,
        ]);

        return response()->json($students);
    }

    public function show($id)
    {
        $students =Student::find($id);
        return response()->json($students);
    }

    public function update(Request $request, $id)
    {
        $students =Student::find($id);

        $students->fName =$request->get('fName');
        $students->lName =$request->get('lName');
        $students->standard =$request->get('standard');
        $students->pNo =$request->get('pNo');
        $students->save();
        return response()->json($students);
    }

    public function destroy($id)
    {
        $students = Student::find($id);
        $students->delete();

        $students= Student::all();

        return response()->json($students);
    }


    //using delete method instead of get
    public function delete($id)
    {
        $students = Student::find($id);
        $students->delete();


        return response()->json($students);
    }


}
