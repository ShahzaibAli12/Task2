<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class deleteDetailsController extends Controller
{
    public function index() {
        $users = DB::select('select * from details');
        return view('seedetails',['users'=>$users]);
     }
     public function destroy($id) {
        
        DB::table('details')->where('id', $id)->delete();

        return redirect('edit-details')->with('message', 'Record deleted successfully!');
    }
}
