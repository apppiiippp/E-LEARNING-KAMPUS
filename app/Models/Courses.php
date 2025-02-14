<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Courses extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $table = 'courses';

    protected $dates =[
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'lecturer_id',
        'name',
        'description'
    ];

    
}
