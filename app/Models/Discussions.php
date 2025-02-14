<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discussions extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $table = 'discussions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable =
    [
        'courses_id',
        'user_id',
        'content'
    ];
}
