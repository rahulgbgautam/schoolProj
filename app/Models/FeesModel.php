<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeesModel extends Model
{
    // use HasFactory;
     protected $table = "fees_details";

     protected $fillable = ['no','date','name','class','section','father_name','admission_no','admission_fee_rs','admission_fee_ps','caution_deposit_fee_rs','caution_deposit_fee_ps','annual_fee_rs','annual_fee_ps','tution_fee_term','tution_fee_rs','tution_fee_ps','bus_fee_term','bus_fee_rs','bus_fee_ps','registration_fee_rs','registration_fee_ps','prospectus_fee_rs','prospectus_fee_ps','others_fee_rs','others_fee_ps','total_fee_rs','total_fee_ps'];
     
}
