<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{
    //
    public function index(Request $request) {
        $id = Auth::user()->id;
        $user = Profile::find($id);

        $user->first_name = request('first', false);
        $user->middle_name = request('middle', false);
        $user->last_name = request('last', false);
        $user->suffix = request('suffix');
        $user->sex = request('sex', false);
        $user->mobile_num = request('mobile_num', false);
        $user->college = request('college', false);
        $user->course = request('course', false);
        $user->year_level = request('year_level', false);
        $user->house_num = request('house_num', false);
        $user->barangay = request('barangay', false);
        $user->street = request('street', false);
        $user->city = request('city', false);
        $user->province = request('province', false);

        $user->save();
        
        return redirect()->back();
    }
}
