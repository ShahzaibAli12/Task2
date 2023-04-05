<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class savedetailsmodel extends Model
{
    use HasFactory;
    public $table = 'details';
	 
	public $fillable = ['name','email','message'];
	
}
