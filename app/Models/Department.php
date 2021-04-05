<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'department_name',
        'department_position',
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
