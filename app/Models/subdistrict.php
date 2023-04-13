<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subdistrict extends Model
{
    use HasFactory;
    public function cat(){
        return $this->belongsTo(district::class,'district_id','id');
     }
}
