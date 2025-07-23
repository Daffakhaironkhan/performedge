<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampling extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaQA',
        'levelAgent',
        'namaAgent',
        'teamLeader',
        'program',
        'kanal',
        'ticketID',
        'category',
        'eventDateTime',
        'konten',
    ];
}

