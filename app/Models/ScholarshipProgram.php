<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipProgram extends Model
{
    use HasFactory;
    protected $table = 'scholarshipprograms';
    public $timestamps = false;    
    protected $fillable = [
        'scholarship_program',
        'policy',
        'qualification',
        'stipend',
        'guidelines',
    ];
}
