<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'father_name',
        'mother_name',
        'contact_no',
        'address',
        'city',
        'state',
        'country',
        'school',
        'standard',
        'mark',
        'image'
    ];
}
