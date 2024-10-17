<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citytowns extends Model
{
    use HasFactory;

    protected $primary_key = 'citytown_id';

    protected $fillable = [
        'citytown_id',
        "province_id",
        "citytown_name"
    ];

    // public function provinces(){
    //     return $this->belongsTo(provinces::class, "province_id", "citytown_id");
    // }
}
