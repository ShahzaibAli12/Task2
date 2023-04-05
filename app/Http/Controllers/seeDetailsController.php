<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class seeDetailsController extends Controller
{
   


    public function index() {
        $users = DB::select('select * from details');
        return view('seedetails',['users'=>$users]);
     }
     public function show($id) {
        $users = DB::select('select * from details where id = ?',[$id]);
        return view('updatedetails',['users'=>$users]);
     }
     public function edit(Request $request,$id) {
        $name = $request->input('name');
       
        $email = $request->input('email');
        
        $message = $request->input('message');
        DB::update('update details set name = ? where id = ?',[$name,$id]);
       
        DB::update('update details set email = ? where id = ?',[$email,$id]);
   
        DB::update('update details set message = ? where id = ?',[$message,$id]);
        return redirect('edit-details')->with('message', 'Record deleted successfully!');  
    }
}
