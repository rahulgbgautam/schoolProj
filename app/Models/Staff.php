<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
	use HasFactory;

	protected $table= "staff_details";

	protected $fillable = ['staff_name','staff_email','staff_id'];

}
