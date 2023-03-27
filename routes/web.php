<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ServeillantGeneralController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\ClassController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Start Prof Controller
Route::get('/addProf',[ProfController::class,'create'])->name('createprof');
Route::put('/editprof/update/{id}', [ProfController::class, 'update'])->name('updateprof');
Route::get('/allProf',[ProfController::class,'showall'])->name('allprof');
Route::post('/storeProf',[ProfController::class,'store'])->name('storeprof');
Route::get('/editprof/{id}',[ProfController::class,'edit'])->name('editprof');
Route::delete('/deleteprof/{id}', [ProfController::class, 'destroy'])->name('deleteprof');
Route::get('/profileprof/{id}',[ProfController::class,'profile'])->name('profileprof');
// End Prof Controller
//Start departement controller
Route::get('/departement',[DepartmentController::class,'index']);
Route::get('/alldepartement',[DepartmentController::class,'create'])->name('alldepartement');
Route::post('/add_departement',[DepartmentController::class,'store'])->name('add_departement');
Route::get('/edit_departement/{id}',[DepartmentController::class,'edit']);
Route::put('/update_departement',[DepartmentController::class,'update']);
Route::delete('/delete_departement',[DepartmentController::class,'destroy']);
//End departement controller
//Start Surveillant General controller
Route::get('/addSurveillantGeneral',[ServeillantGeneralController::class, 'create'])->name('createSG');
Route::post('/storeSurveillantGeneral',[ServeillantGeneralController::class,'store'])->name('storeSG');
Route::get('/allSurveillantGeneral',[ServeillantGeneralController::class,'showall'])->name('allSG');
Route::delete('/deleteSurveillantGeneral/{id}', [ServeillantGeneralController::class, 'destroy'])->name('deleteSG');
Route::get('/editSurveillantGeneral/{id}',[ServeillantGeneralController::class,'edit'])->name('editSG');
Route::put('/editSurveillantGeneral/update/{id}', [ServeillantGeneralController::class, 'update'])->name('updateSG');
Route::get('/profileSurveillantGeneral/{id}',[ServeillantGeneralController::class,'profile'])->name('profileSG');
//End Surveillant General controller

//start CRUD admin
Route::get('/add_admin',[AdController::class,'index'])->name('createadmin');
Route::put('/editadmin/update/{id}', [AdController::class, 'update'])->name('updateadmin');
Route::get('/allAdmin',[AdController::class,'show'])->name('alladmin');
Route::post('/storeAdmin',[AdController::class,'store'])->name('storeadmin');
Route::get('/editadmin/{id}',[AdController::class,'edit'])->name('editadmin');
Route::delete('/deleteadmin/{id}', [AdController::class, 'destroy'])->name('deleteadmin');
Route::get('/profileadmin/{id}',[AdController::class,'profile'])->name('profileadmin');
//end CRUD admin
//Start Filiere controller
Route::get('/allFiliere',[FiliereController::class,'showall'])->name('allfiliere');
Route::post('/storeFiliere',[FiliereController::class,'store'])->name('storefiliere');
Route::delete('/deleteFiliere/{id}', [FiliereController::class, 'destroy'])->name('deletefiliere');
Route::put('/editFiliere/update/{id}', [FiliereController::class, 'update'])->name('updatefiliere');
Route::get('/edit_filiere/{id}',[FiliereController::class,'edit']);
//End Filiere controller
//Start student controller
Route::get('/addStudent',[StudentController::class,'create'])->name('createstudent');
Route::post('/storeStudent',[StudentController::class,'store'])->name('storestudent');
Route::put('/editstudent/update/{id}', [StudentController::class, 'update'])->name('updatestudent');
Route::get('/editstudent/{id}',[StudentController::class,'edit'])->name('editstudent');
Route::get('/allStudent',[StudentController::class,'showall'])->name('allstudent');
Route::delete('/deletestudent/{id}', [StudentController::class, 'destroy'])->name('deletestudent');
Route::get('/profilestudent/{id}',[StudentController::class,'profile'])->name('profilestudent');
//End student controller
//Start family controller
Route::get('/addFamily',[FamilyController::class,'create'])->name('createfamily');
Route::post('/storeFamily',[FamilyController::class,'store'])->name('storefamily');
Route::put('/editfamily/update/{id}', [FamilyController::class, 'update'])->name('updatefamily');
Route::get('/editfamily/{id}',[FamilyController::class,'edit'])->name('editfamily');
Route::get('/allFamily',[FamilyController::class,'showall'])->name('allfamily');
Route::delete('/deletefamily/{id}', [FamilyController::class, 'destroy'])->name('deletefamily');
Route::get('/profilefamily/{id}',[FamilyController::class,'profile'])->name('profilefamily');
//End family controller
//Start document controller
Route::get('/addDocument',[DocumentController::class,'create'])->name('createdocument');
Route::post('/storeDocument',[DocumentController::class,'store'])->name('storedocument');
Route::put('/editdocument/update/{id}', [DocumentController::class, 'update'])->name('updatedocument');
Route::get('/editdocument/{id}',[DocumentController::class,'edit'])->name('editdocument');
Route::get('/allDocument',[DocumentController::class,'showall'])->name('alldocument');
Route::delete('/deletedocument/{id}', [DocumentController::class, 'destroy'])->name('deletedocument');
Route::get('/profiledocument/{id}',[DocumentController::class,'profile'])->name('profiledocument');
Route::get('/download/{id}',[DocumentController::class,'download'])->name('download');
//End domcument controller
//Start Class controller
Route::get('/allClass',[ClassController::class,'showall'])->name('allclass');
Route::post('/storeClass',[ClassController::class,'store'])->name('storeclass');
Route::delete('/deleteClass/{id}', [ClassController::class, 'destroy'])->name('deleteclass');
Route::put('/editClass/update/{id}', [ClassController::class, 'update'])->name('updateclass');
Route::get('/edit_class/{id}',[ClassController::class,'edit']);
//End Class controller
