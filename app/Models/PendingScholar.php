<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingScholar extends Model
{
    use HasFactory;
    protected $table = 'pending_scholarships';
    public $timestamps = false;
    protected $fillable = [
        'student_id',
        'scholarship_program',
        'inclusive_year',
        'gwa',
        'private'
    ];
}
