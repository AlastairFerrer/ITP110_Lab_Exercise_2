<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinces extends Model
{
    use HasFactory;

    protected $primary_key = 'provinces_id';

    protected $fillable = [
        "provinces_id",
        "region_id",
        "province_name"
    ];

    // public function regions(){
    //     return $this->belongsTo(regions::class, "region_id" , "provinces_id");
    // }
}
