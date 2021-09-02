<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentScholarshipController;
use App\Http\Controllers\ScholarshipProgramController;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\ApplyUpload;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProofController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth']);

Route::get('/profilestudent', function () {
    return view('profilestudent');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/termination', function () {
    return view('termination');
});

Route::get('/scholarshipprograms', function () {
    return view('scholarshipprograms');
});

Route::get('/homeadmin', function () {
    return view('administrator.homeadmin');
});

Route::get('/scholarsprofileadmin', function () {
    return view('administrator.scholarsprofileadmin');
});

Route::get('/scholarshipprogramadmin', function () {
    return view('administrator.scholarshipprogramadmin');
});

Route::get('/create', function () {
    return view('create');
});




Route::get('/scholarshipdetails', [StudentScholarshipController::class, 'show']);

Route::post('/scholarshipdetails', [StudentScholarshipController::class, 'index']);

Route::post('/profilestudent', [ProfileController::class, 'index']);

Route::post('/termination', [StudentScholarshipController::class, 'delete']);

Route::get('/scholarshipprograms', [ScholarshipProgramController::class, 'studentscholarshipprogram']);

Route::get('/file-upload', [FileUpload::class, 'createForm']);

Route::post('/file-upload', [FileUpload::class, 'fileUpload'])->name('fileUpload');

Route::get('/apply', [ApplyUpload::class, 'createForm']);

Route::post('/apply', [ApplyUpload::class, 'fileUpload'])->name('apply');

Route::get('/upload', [UploadController::class, 'createForm']);

Route::post('/upload', [UploadController::class, 'fileUpload'])->name('upload');


//ADMIN


Route::get('/administrator/dashboard', [DashboardController::class, 'index'])->middleware(['auth']);

Route::get('/administrator/listadmin', [StudentScholarshipController::class, 'scholars']);

Route::get('/administrator/scholarsprofileadmin/{id}', [StudentScholarshipController::class, 'scholardetails']);

Route::get('/administrator/scholarshipdetailsadmin/{id}', [StudentScholarshipController::class, 'scholarshipdetails']);

Route::post('/administrator/listadmin/{id}', [StudentScholarshipController::class, 'deletescholar']);

Route::post('/administrator/scholarshipprogramadmin', [ScholarshipProgramController::class, 'addscholarshipprogram']);

Route::get('/administrator/scholarshipprogramadmin', [ScholarshipProgramController::class, 'displayscholarshipprogram']);

Route::post('/administrator/scholarshipprogramadmin/{id}', [ScholarshipProgramController::class, 'deletescholarshipprogram']);

Route::get('/administrator/edit/{id}', [ScholarshipProgramController::class, 'scholarshipprogramdetails']);

Route::post('/administrator/edit/{id}', [ScholarshipProgramController::class, 'editscholarshipprogram']);

Route::get('download', [DownloadController::class,'download']);

Route::get('/administrator/proofadmin/{id}', [ProofController::class, 'proof']);

Route::get('/administrator/formsadmin/{id}', [StudentScholarshipController::class, 'studentdetailsadmin']);


Route::get('/administrator/calendaradmin', function () {
    return view('administrator.calendaradmin');
});




// COORDINATOR

Route::get('/coordinator/listcoordinator', [StudentScholarshipController::class, 'listcoordinator']);

Route::get('/coordinator/applicants', [StudentScholarshipController::class, 'listapplicants']);

Route::get('/coordinator/view/{id}', [StudentScholarshipController::class, 'view']);

Route::get('/coordinator/scholarsview/{id}', [StudentScholarshipController::class, 'scholarsview']);

Route::get('/coordinator/scholarshipdetailscoordinator/{id}', [StudentScholarshipController::class, 'scholarshipdetailscoordinator']);

Route::get('/coordinator/scholarsdetails/{id}', [StudentScholarshipController::class, 'scholarsdetails']);


Route::post('/coordinator/scholarshipdetailscoordinator/{id}', [StudentScholarshipController::class, 'deletescholarcoordinator']);

Route::post('/coordinator/listcoordinator/{id}', [StudentScholarshipController::class, 'deletescholarship']);

Route::get('/coordinator/proofcoordinator/{id}', [ProofController::class, 'proofcoordinator']);

Route::get('/coordinator/formscoordinator/{id}', [StudentScholarshipController::class, 'studentdetails']);

Route::get('/coordinator/scholarshipprogramcoordinator', [ScholarshipProgramController::class, 'displayscholarshipprogramcoordinator']);




Route::get('/coordinator/calendarcoordinator', function () {
    return view('coordinator.calendarcoordinator');
});






require __DIR__.'/auth.php';

Route::multiauth('Administrator', 'administrator');

Route::multiauth('Coordinator', 'coordinator');



