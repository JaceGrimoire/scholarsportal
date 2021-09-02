<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use App\Models\StudentScholarship;
use App\Models\PendingScholar;
use App\Models\Forms;

class StudentScholarshipController extends Controller
{
    //
    function show() {
        $id = Auth::user()->student_id;
        $user = Profile::find($id);
        $scholar = PendingScholar::where('student_id', '=', $id)->whereNotNull('scholarship_program')->first();
        if($scholar != NULL) {
            $status = "Waiting for Approval";
        } 
        else {
            $scholar = StudentScholarship::where('student_id', '=', $id)->first();
            $status = "Approved";
        }        
        return view('/scholarshipdetails', compact('scholar','status'));
    }
    function index(Request $request) {
        $id = Auth::user()->student_id;
        $user = Profile::find($id);
        $scholar = PendingScholar::where('student_id', '=', $id)->first();
        $scholar->scholarship_program = request('program', false);
        $scholar->inclusive_year = request('year', false);
        $scholar->gwa = request('gwa', false);
        $scholar->private = request('private', false);

        $scholar->save();

        return redirect()->back();
    }

    function delete(Request $request) {
        $id = Auth::user()->id;
        $user = Profile::find($id);
        $scholar = StudentScholarship::where('student_id', '=', $user->student_id)->first();
        $scholar->scholarship_program = NULL;
        $scholar->inclusive_year = NULL;
        $scholar->gwa = NULL;
        $scholar->private = NULL;

        $scholar->save();
        return redirect('/dashboard');
    }

    function scholars(){
        $scholars = User::join('student_scholarship', 'users.student_id', '=', 'student_scholarship.student_id')->whereNotNull('student_scholarship.scholarship_program')->get();
        return view ('administrator.listadmin', ['scholars' => $scholars]);
    }

    function studentdetailsadmin($id){
        $student = Profile::where('student_id', '=', $id)->first();
        $proofs = Forms::where('student_id', '=', $id)->get();
        return view('administrator.formsadmin', compact('student', 'proofs'));
    }
    function scholardetails($id){
        $details = Profile::where('student_id', '=', $id)->first();
        return view('administrator.scholarsprofileadmin',  ['details' => $details]);    }

    function scholarshipdetails($id){
        $student = Profile::where('student_id', '=', $id)->first();
        $scholarshipdetails = User::join('student_scholarship', 'users.student_id', '=', 'student_scholarship.student_id')->where('student_scholarship.student_id', '=', $id)->first();
        return view ('administrator.scholarshipdetailsadmin' , ['scholarshipdetails' => $scholarshipdetails] , ['student' => $student]);
    }

    function deletescholar($id, Request $request){
        $deletescholar = StudentScholarship::where('student_id', '=', $id)->first();
        $deletescholar->scholarship_program = NULL;
        $deletescholar->inclusive_year = NULL;
        $deletescholar->gwa = NULL;
        $deletescholar->save();
        return redirect('/administrator/listadmin');

    }

    function listapplicants(){
        $scholars = User::join('pending_scholarships', 'users.student_id', '=', 'pending_scholarships.student_id')->where('users.college', '=', 'CAS')->whereNotNull('pending_scholarships.scholarship_program')->get();
        return view ('coordinator.applicants', ['scholars' => $scholars]);
    }

    function listcoordinator(){
            $scholars = User::join('student_scholarship', 'users.student_id', '=', 'student_scholarship.student_id')->where('users.college', '=', 'CAS')->whereNotNull('student_scholarship.scholarship_program')->get();
            return view ('coordinator.listcoordinator', ['scholars' => $scholars]);
    }

    function view($id){
        $details = Profile::where('student_id', '=', $id)->first();
        return view('coordinator.view',  ['details' => $details]); 
    }

    function scholarsview($id){
        $details = Profile::where('student_id', '=', $id)->first();
        return view('coordinator.scholarsview',  ['details' => $details]); 
    }

    function scholarshipdetailscoordinator($id){
        
        $student = Profile::where('student_id', '=', $id)->first();
        $scholarshipdetails = User::join('pending_scholarships', 'users.student_id', '=', 'pending_scholarships.student_id')->where('users.student_id', '=', $id)->first();        
        return view ('coordinator.scholarshipdetailscoordinator' , ['scholarshipdetails' => $scholarshipdetails] , ['student' => $student]);
    }

    function scholarsdetails($id){
        
        $student = Profile::where('student_id', '=', $id)->first();
        $scholarshipdetails = User::join('student_scholarship', 'users.student_id', '=', 'student_scholarship.student_id')->where('users.student_id', '=', $id)->first();        
        return view ('coordinator.scholarsdetails' , ['scholarshipdetails' => $scholarshipdetails] , ['student' => $student]);
    }

    function deletescholarcoordinator($id, Request $request){
        $scholarship = StudentScholarship::where('student_id', '=', $id)->first();
        $deletescholar = PendingScholar::where('student_id', '=', $id)->first();
        if($request->submit == "ACCEPT") {
        $scholarship->student_id = $deletescholar->student_id;
        $scholarship->scholarship_program = $deletescholar->scholarship_program;
        $scholarship->inclusive_year = $deletescholar->inclusive_year;
        $scholarship->gwa = $deletescholar->gwa;
        $scholarship->private = $deletescholar->private;
        $scholarship->save();
        
        $deletescholar->scholarship_program = NULL;
        $deletescholar->inclusive_year = NULL;      
        $deletescholar->gwa = NULL;
        $deletescholar->private = NULL;  
        $deletescholar->save();

        }
        else if ($request->submit == "DENY") {   
            $deletescholar->scholarship_program = NULL;
            $deletescholar->inclusive_year = NULL;      
            $deletescholar->gwa = NULL;
            $deletescholar->private = NULL;  
            $deletescholar->save();

        }
        return redirect('/coordinator/listcoordinator');
    }

    function deletescholarship($id){
        $deletescholar = StudentScholarship::where('student_id', '=', $id)->first();
        $deletescholar->delete();
        return redirect('/coordinator/listcoordinator');
    }
    
    function pendingscholar($id, Request $request){
        StudentScholarship::where('student_id', '=', $user->student_id)->first();
    }

    function studentdetails($id){
        $student = Profile::where('student_id', '=', $id)->first();
        $proofs = Forms::where('student_id', '=', $id)->get();
        return view('coordinator.formscoordinator', compact('student', 'proofs'));
    }



}

