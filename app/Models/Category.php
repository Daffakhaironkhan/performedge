<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_date',
        'program',
        'role',
        'category1',
        'category2',
        'category3',
        'category4',
        'sla',
        'request_by'
    ];
}

