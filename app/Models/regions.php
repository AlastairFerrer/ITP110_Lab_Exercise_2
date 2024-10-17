<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regions extends Model
{
    use HasFactory;

    protected $primary_key = "region_id";

    protected $fillable = [
        "region_name",
        "region_description"
    ];

}
