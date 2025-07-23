<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id_finger',
        'nama',
        'team_leader',
        'supervisor',
        'level',
        'program',
        'ttl',
        'age',
        'join_date',
        'tenure',
        'alamat',
        'gender',
        'email',
        'foto',
        'title',
    ];
}


