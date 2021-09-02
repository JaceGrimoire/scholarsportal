<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Profile;

class ProofController extends Controller
{
    public function proof($id){
        $proof = File::where('student_id', '=', $id)->get();
        $student = Profile::where('student_id', '=', $id)->first();
        return view ('administrator.proofadmin', compact('student','proof'));    
    }

    public function proofcoordinator($id){
        $proof = File::where('student_id', '=', $id)->get();
        $student = Profile::where('student_id', '=', $id)->first();
        return view ('coordinator.proofcoordinator', compact('student','proof'));    
    }
}
