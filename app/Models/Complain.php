<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Complain extends Model
{
    use HasFactory;
    protected $table='complains';
    protected $fillable=[
        'name',
        'title',
        'category',
        'problem',
        'image',
        'user_id'


    ];
     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
