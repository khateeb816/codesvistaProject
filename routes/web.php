<?php

use App\Http\Controllers\AirlinesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EducationCategoryController;
use App\Http\Controllers\ExperienceRangeController;
use App\Http\Controllers\FinalRegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InitialRegistrationController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MedicalCenterController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\NavttcController;
use App\Http\Controllers\PaymentAgentController;
use App\Http\Controllers\RecruitmentAgentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TravelAgentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisaCategoryController;
use Illuminate\Support\Facades\Route;





Route::get('/', [HomeController::class , 'index'])->middleware('auth');

Route::get('/login' , [AuthController::class , 'login'])->name('login');
Route::post('/login' , [AuthController::class , 'loginPost'])->name('loginPost');

Route::get('/register' , [AuthController::class , 'register'])->name('register');
Route::post('/register' , [AuthController::class , 'registerPost'])->name('registerPost');

Route::match(['get' , 'post'] , '/logout' , [AuthController::class , 'logout'])->name('logout');

Route::post('/password-reset' , [AuthController::class , 'passwordReset'])->name('password.request');

Route::get('/users' , [UserController::class , 'index'])->name('users');
Route::get('/users/add' , [UserController::class , 'add'])->name('users.add');
Route::post('/users' , [UserController::class , 'store'])->name('users.store');
Route::get('/users/{id}' , [UserController::class , 'edit'])->name('users.edit');
Route::put('/users/{id}' , [UserController::class , 'update'])->name('users.update');
Route::delete('/users/{id}' , [UserController::class , 'destroy'])->name('users.destroy');

// Medical Records Routes
Route::post('/medical-records' , [MedicalRecordController::class , 'store'])->name('medicalRecords.store');
Route::put('/medical-records/{id}' , [MedicalRecordController::class , 'update'])->name('medicalRecords.update');
Route::delete('/medical-records/{id}' , [MedicalRecordController::class , 'destroy'])->name('medicalRecords.destroy');

// NAVTTC Routes
Route::post('/navttc' , [NavttcController::class , 'store'])->name('navttc.store');
Route::put('/navttc/{id}' , [NavttcController::class , 'update'])->name('navttc.update');
Route::delete('/navttc/{id}' , [NavttcController::class , 'destroy'])->name('navttc.destroy');

Route::get('/roles' , [RoleController::class , 'index'])->name('roles');
Route::get('/roles/add' , [RoleController::class , 'add'])->name('roles.add');
Route::post('/roles' , [RoleController::class , 'store'])->name('roles.store');
Route::get('/roles/{id}' , [RoleController::class , 'edit'])->name('roles.edit');
Route::put('/roles/{id}' , [RoleController::class , 'update'])->name('roles.update');
Route::delete('/roles/{id}' , [RoleController::class , 'destroy'])->name('roles.destroy');

Route::get('/paymentAgents' , [PaymentAgentController::class , 'index'])->name('paymentAgents');
Route::post('/paymentAgents' , [PaymentAgentController::class , 'store'])->name('paymentAgents.store');
Route::get('/paymentAgents/{id}' , [PaymentAgentController::class , 'edit'])->name('paymentAgents.edit');
Route::put('/paymentAgents/{id}' , [PaymentAgentController::class , 'update'])->name('paymentAgents.update');
Route::delete('/paymentAgents/{id}' , [PaymentAgentController::class , 'destroy'])->name('paymentAgents.destroy');

Route::get('/recruitmentAgents' , [RecruitmentAgentController::class , 'index'])->name('recruitmentAgents');
Route::post('/recruitmentAgents' , [RecruitmentAgentController::class , 'store'])->name('recruitmentAgents.store');
Route::get('/recruitmentAgents/{id}' , [RecruitmentAgentController::class , 'edit'])->name('recruitmentAgents.edit');
Route::put('/recruitmentAgents/{id}' , [RecruitmentAgentController::class , 'update'])->name('recruitmentAgents.update');
Route::delete('/recruitmentAgents/{id}' , [RecruitmentAgentController::class , 'destroy'])->name('recruitmentAgents.destroy');

Route::get('/travelAgents' , [TravelAgentController::class , 'index'])->name('travelAgents');
Route::post('/travelAgents' , [TravelAgentController::class , 'store'])->name('travelAgents.store');
Route::get('/travelAgents/{id}' , [TravelAgentController::class , 'edit'])->name('travelAgents.edit');
Route::put('/travelAgents/{id}' , [TravelAgentController::class , 'update'])->name('travelAgents.update');
Route::delete('/travelAgents/{id}' , [TravelAgentController::class , 'destroy'])->name('travelAgents.destroy');

Route::get('/visaCategories' , [VisaCategoryController::class , 'index'])->name('visaCategories');
Route::post('/visaCategories' , [VisaCategoryController::class , 'store'])->name('visaCategories.store');
Route::get('/visaCategories/{id}' , [VisaCategoryController::class , 'edit'])->name('visaCategories.edit');
Route::put('/visaCategories/{id}' , [VisaCategoryController::class , 'update'])->name('visaCategories.update');
Route::delete('/visaCategories/{id}' , [VisaCategoryController::class , 'destroy'])->name('visaCategories.destroy');

Route::get('/educationCategories' , [EducationCategoryController::class , 'index'])->name('educationCategories');
Route::post('/educationCategories' , [EducationCategoryController::class , 'store'])->name('educationCategories.store');
Route::get('/educationCategories/{id}' , [EducationCategoryController::class , 'edit'])->name('educationCategories.edit');
Route::put('/educationCategories/{id}' , [EducationCategoryController::class , 'update'])->name('educationCategories.update');
Route::delete('/educationCategories/{id}' , [EducationCategoryController::class , 'destroy'])->name('educationCategories.destroy');

Route::get('/jobCategories' , [JobCategoryController::class , 'index'])->name('jobCategories');
Route::post('/jobCategories' , [JobCategoryController::class , 'store'])->name('jobCategories.store');
Route::get('/jobCategories/{id}' , [JobCategoryController::class , 'edit'])->name('jobCategories.edit');
Route::put('/jobCategories/{id}' , [JobCategoryController::class , 'update'])->name('jobCategories.update');
Route::delete('/jobCategories/{id}' , [JobCategoryController::class , 'destroy'])->name('jobCategories.destroy');

Route::get('/airlines' , [AirlinesController::class , 'index'])->name('airlines');
Route::post('/airlines' , [AirlinesController::class , 'store'])->name('airlines.store');
Route::get('/airlines/{id}' , [AirlinesController::class , 'edit'])->name('airlines.edit');
Route::put('/airlines/{id}' , [AirlinesController::class , 'update'])->name('airlines.update');
Route::delete('/airlines/{id}' , [AirlinesController::class , 'destroy'])->name('airlines.destroy');

Route::get('/medicalCenters' , [MedicalCenterController::class , 'index'])->name('medicalCenters');
Route::post('/medicalCenters' , [MedicalCenterController::class , 'store'])->name('medicalCenters.store');
Route::get('/medicalCenters/{id}' , [MedicalCenterController::class , 'edit'])->name('medicalCenters.edit');
Route::put('/medicalCenters/{id}' , [MedicalCenterController::class , 'update'])->name('medicalCenters.update');
Route::delete('/medicalCenters/{id}' , [MedicalCenterController::class , 'destroy'])->name('medicalCenters.destroy');

Route::get('/initialRegistrations' , [InitialRegistrationController::class , 'index'])->name('initialRegistration');
Route::post('/initialRegistrations' , [InitialRegistrationController::class , 'store'])->name('initialRegistration.store');
Route::get('/initialRegistrations/{id}' , [InitialRegistrationController::class , 'edit'])->name('initialRegistration.edit');
Route::put('/initialRegistrations/{id}' , [InitialRegistrationController::class , 'update'])->name('initialRegistration.update');
Route::delete('/initialRegistrations/{id}' , [InitialRegistrationController::class , 'destroy'])->name('initialRegistration.destroy');

Route::get('/finalRegistrations' , [FinalRegistrationController::class , 'index'])->name('finalRegistration');
Route::get('/finalRegistrations/create' , [FinalRegistrationController::class , 'create'])->name('finalRegistration.create');
Route::post('/finalRegistrations' , [FinalRegistrationController::class , 'store'])->name('finalRegistration.store');
Route::get('/finalRegistrations/{id}/edit' , [FinalRegistrationController::class , 'edit'])->name('finalRegistration.edit');
Route::put('/finalRegistrations/{id}' , [FinalRegistrationController::class , 'update'])->name('finalRegistration.update');
Route::delete('/finalRegistrations/{id}' , [FinalRegistrationController::class , 'destroy'])->name('finalRegistration.destroy');
Route::get('/finalRegistrations/{id}' , [FinalRegistrationController::class , 'show'])->name('finalRegistration.show');
Route::put('/finalRegistrations/{id}/change-status' , [FinalRegistrationController::class , 'changeStatus'])->name('finalRegistration.changeStatus');
Route::post('/documents/update/{id}' , [FinalRegistrationController::class , 'updateDocuments'])->name('documents.update');
Route::post('/protector/store', [FinalRegistrationController::class, 'storeProtector'])->name('protector.store');
Route::put('/protector/update/{id}', [FinalRegistrationController::class, 'updateProtector'])->name('protector.update');
Route::delete('/protector/delete/{id}', [FinalRegistrationController::class, 'destroyProtector'])->name('protector.destroy');
Route::post('/protectorDocument/store', [FinalRegistrationController::class, 'storeProtectorDocument'])->name('protectorDocument.store');
Route::post('/protectorDocument/update/{id}', [FinalRegistrationController::class, 'updateProtectorDocument'])->name('protectorDocument.update');
Route::delete('/protectorDocument/delete/{id}', [FinalRegistrationController::class, 'destroyProtectorDocument'])->name('protectorDocument.destroy');

// Expense Record Routes
Route::post('/expenseRecord/store', [FinalRegistrationController::class, 'storeExpenseRecord'])->name('expenseRecord.store');
Route::put('/expenseRecord/update/{id}', [FinalRegistrationController::class, 'updateExpenseRecord'])->name('expenseRecord.update');
Route::delete('/expenseRecord/delete/{id}', [FinalRegistrationController::class, 'destroyExpenseRecord'])->name('expenseRecord.destroy');


Route::get('/experienceRanges' , [ExperienceRangeController::class , 'index'])->name('experienceRanges');
Route::post('/experienceRanges' , [ExperienceRangeController::class , 'store'])->name('experienceRanges.store');
Route::get('/experienceRanges/{id}' , [ExperienceRangeController::class , 'edit'])->name('experienceRanges.edit');
Route::put('/experienceRanges/{id}' , [ExperienceRangeController::class , 'update'])->name('experienceRanges.update');
Route::delete('/experienceRanges/{id}' , [ExperienceRangeController::class , 'destroy'])->name('experienceRanges.destroy');

Route::post('/job/store', [JobController::class, 'store'])->name('job.store');
Route::put('/job/update/{id}', [JobController::class, 'update'])->name('job.update');
Route::delete('/job/delete/{id}', [JobController::class, 'destroy'])->name('job.destroy');

Route::post('/eNumber/store', [FinalRegistrationController::class, 'storeENumber'])->name('eNumber.store');