<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Submissions extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $table = 'submissions';

    protected $dates =[
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'assignment_id',
        'student_id',
        'file_path',
        'score',
    ];
}
