<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class studentInsertController extends Controller
{


    public function student_list(){
        $students = DB::select("select * from student");
        return view('student_list', ['students' => $students]);
    }



    public function insert_form(){
        return view('insert_form');
    }

    public function insert(Request $request) {
        // Validate the request data
        $request->validate([
            'student_name' => 'required|string|max:255',
        ]);
    
        $name = $request->input('student_name');
    
        // Insert Operation
        DB::insert("insert into student (name) values (?)", [$name]);
    
        return redirect('/students')->with('success', 'Record inserted successfully!');
    }
    


    public function edit($id){
        $student = DB::table('student')->where('id', $id)->first();
        return view('student_edit', ['student' => $student]);
    }

    public function update(Request $request, $id) {
        // Validate that the student_name input is not empty
        $request->validate([
            'student_name' => 'required|string|max:255',
        ]);
    
        $name = $request->input('student_name'); // Get the student name from the request
    
        // Check if the name is null or empty before updating
        if (is_null($name) || $name === '') {
            return response()->json(['error' => 'Name cannot be null or empty'], 400);
        }
    
        DB::update('update student set name = ? where id = ?', [$name, $id]);
        return 'Record updated successfully!';
    }
    

    public function delete($id){
        DB::delete("delete from student where id=?", [$id]);
        return "Record deleted Sucessfully";
    }

}