<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local_level extends Model
{
    use HasFactory;
    protected $table="local_levels";
    protected $fillable=[
        'id',
        'name',
        'code',
        'district_id',
        'status'
    ];
}
