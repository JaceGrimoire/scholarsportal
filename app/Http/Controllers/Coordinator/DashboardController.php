<?php

namespace App\Http\Controllers\Coordinator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        /*
         * Uncomment the line below if you want to use verified middleware
         */
        //$this->middleware('verified:coordinator.verification.notice');
    }


    public function index(){
        $coordinator = Auth::guard('coordinator')->user();
        $scholars = User::join('student_scholarship', 'users.student_id', '=', 'student_scholarship.student_id')->where('college', '=', $coordinator->college)->whereNotNull('scholarship_program')->count();
        $pending = User::join('pending_scholarships', 'users.student_id', '=', 'pending_scholarships.student_id')->where('college', '=', $coordinator->college)->whereNotNull('scholarship_program')->count();
        return view('coordinator.dashboard', compact('scholars','pending'));    
    }

    
}
