<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class barangays extends Model
{
    use HasFactory;

    protected $primary_key = 'barangay_id';

    protected $fillable = [
        'citytown_id',
        'barangay_name'
    ];

    // function citytowns(){
    //     return $this->belongsTo(citytowns::class , "citytown_id", "barangay_id");
    // }
}
