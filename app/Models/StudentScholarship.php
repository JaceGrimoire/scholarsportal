<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentScholarship extends Model
{
    use HasFactory;
    protected $table = 'student_scholarship';
    public $timestamps = false;
    protected $fillable = [
        'student_id',
        'scholarship_program',
        'inclusive_year',
        'gwa',
        'private'
    ];
}
