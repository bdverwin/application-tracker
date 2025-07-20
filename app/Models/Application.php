<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    // 👇 Add this line
    protected $table = 'application';

    protected $fillable = [
        'user_id',
        'comp_name',
        'postion',
        'link',
        'address',
        'job_pay',
        'status',
        'contact',
        'created_at',
        'updated_at',

        // other columns
    ];
}

