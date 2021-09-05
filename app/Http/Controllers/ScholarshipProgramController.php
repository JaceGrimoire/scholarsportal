<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScholarshipProgram;

class ScholarshipProgramController extends Controller
{
    function addscholarshipprogram(Request $request){
        $scholarshipprogram = new ScholarshipProgram();
        $scholarshipprogram->scholarship_program = request('scholarship', false);
        $scholarshipprogram->policy = request('policy', false);
        $scholarshipprogram->qualification = request('qualification', false);
        $scholarshipprogram->stipend = request('stipend', false);
        $scholarshipprogram->guidelines = request('guidelines', false);
        $scholarshipprogram->save();

        return redirect('/administrator/scholarshipprogramadmin');

    }

    function displayscholarshipprogram(){
        $scholarshipprogram = ScholarshipProgram::all();
        return view('/administrator.scholarshipprogramadmin', ['scholarshipprogram' => $scholarshipprogram]);
        }

    function deletescholarshipprogram($id, Request $request){
        $deletescholarshipprogram = ScholarshipProgram::where('id', '=', $id)->first();
        $deletescholarshipprogram->delete();
            return redirect('/administrator/scholarshipprogramadmin');
        }

    function scholarshipprogramdetails($id){
        $details = ScholarshipProgram::where('id', '=', $id)->first();
        return view ('/administrator.edit', ['details' => $details]);
    }

    function editscholarshipprogram($id, Request $request){
        $editscholarshipprogram = ScholarshipProgram::where('id', '=', $id)->first();
        $editscholarshipprogram->scholarship_program = request('scholarship', false);
        $editscholarshipprogram->policy = request('policy', false);
        $editscholarshipprogram->qualification = request('qualification', false);
        $editscholarshipprogram->stipend = request('stipend', false);
        $editscholarshipprogram->guidelines = request('guidelines', false);
        $editscholarshipprogram->save();

        return redirect('/administrator/scholarshipprogramadmin');
        
    }

    function studentscholarshipprogram(){
        $scholarshipprogram = ScholarshipProgram::all();
        return view('/scholarshipprograms', ['scholarshipprogram' => $scholarshipprogram]);
        }

        function displayscholarshipprogramcoordinator(){
            $scholarshipprogram = ScholarshipProgram::all();
            return view('/coordinator.scholarshipprogramscoordinator', ['scholarshipprogram' => $scholarshipprogram]);
            }


    }
