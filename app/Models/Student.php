<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'address',
        'course',
        'studentid',
        'contact',
        'econtact',
        'datebirth',
        'ename',
        'signature',
        'proimage',
    ];
}
