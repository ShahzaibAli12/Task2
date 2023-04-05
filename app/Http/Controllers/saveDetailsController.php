<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\savedetailsmodel;
class saveDetailsController extends Controller
{
    public function Details()
    {
        return view('sendmessage');
    }
  
 
    public function DetailsDataSave(Request $request)
    {
     $details= new savedetailsmodel();
        
         $details->name=$request->input('name');
        
         $details->email=$request->input('email');
       
         $details->message=$request->input('message');
 
         $details->save();
 
         return redirect('/send-details')->with('success','Message sent successfully');
     }
}
