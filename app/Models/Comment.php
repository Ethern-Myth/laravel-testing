<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /** Model for Comment table */
    protected $fillable = [
        'name',
        'comment'
    ];
}
