<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Macro extends Model
{
    use HasFactory;

    protected $fillable = [
        'layanan',
        'user',
        'category1',
        'category2',
        'category3',
        'issue',
        'sample_inquiry',
        'action',
        'macro_name',
        'macro',
        'template',
    ];
}

