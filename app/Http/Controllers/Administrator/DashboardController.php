<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\StudentScholarship;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        /*
         *  Uncomment the line below if you want to use verified middleware
         */
        //$this->middleware('verified:administrator.verification.notice');
    }


    public function index(){
        $scholars = StudentScholarship::all()->whereNotNull('scholarship_program')->count();
        $scholars_cas = User::join('student_scholarship', 'users.student_id', '=', 'student_scholarship.student_id')->where('college', '=', 'CAS')->whereNotNull('scholarship_program')->count();
        $scholars_coe = User::join('student_scholarship', 'users.student_id', '=', 'student_scholarship.student_id')->where('college', '=', 'COE')->whereNotNull('scholarship_program')->count();
        $scholars_cbea = User::join('student_scholarship', 'users.student_id', '=', 'student_scholarship.student_id')->where('college', '=', 'CBEA')->whereNotNull('scholarship_program')->count();
        $scholars_chs = User::join('student_scholarship', 'users.student_id', '=', 'student_scholarship.student_id')->where('college', '=', 'CHS')->whereNotNull('scholarship_program')->count();
        $scholars_cafsd = User::join('student_scholarship', 'users.student_id', '=', 'student_scholarship.student_id')->where('college', '=', 'CAFSD')->whereNotNull('scholarship_program')->count();
        $scholars_casat = User::join('student_scholarship', 'users.student_id', '=', 'student_scholarship.student_id')->where('college', '=', 'CASAT')->whereNotNull('scholarship_program')->count();
        $scholars_cte = User::join('student_scholarship', 'users.student_id', '=', 'student_scholarship.student_id')->where('college', '=', 'CTE')->whereNotNull('scholarship_program')->count();
        $scholars_cit = User::join('student_scholarship', 'users.student_id', '=', 'student_scholarship.student_id')->where('college', '=', 'CIT')->whereNotNull('scholarship_program')->count();
        return view('administrator.dashboard', compact('scholars', 'scholars_cas', 'scholars_coe', 
        'scholars_cbea', 'scholars_chs', 'scholars_cafsd', 'scholars_casat', 'scholars_cte', 'scholars_cit'));
         }
}
