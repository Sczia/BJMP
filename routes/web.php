<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\homeContents;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\MedicalRecyclebinController;
use App\Http\Controllers\PaabotController;
use App\Http\Controllers\PdlController;
use App\Http\Controllers\PdlRecyclebinController;
use App\Http\Controllers\RequestController;
use App\Mail\Email;
use App\Mail\WelcomeMail;
use App\PdlRecyclebin;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;






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
//home//
Route::get('/', [homeContents::class,'opener']) -> name('opener');
Route::get('/home', [homeContents::class,'landing']) -> name('landing');
Route::get('/aboutus', [homeContents::class,'aboutus']) -> name('aboutus');
/* Route::get('/gallery', [homeContents::class,'gallery']) -> name('gallery'); */
Route::get('/appointment', [homeContents::class,'appointment']) -> name('appointment');

//appointment//
Route::get('/guidlines', [homeContents::class,'guidlines']) -> name('guidlines');
Route::get('/contactus', [homeContents::class,'contactus']) -> name('contactus');
Route::get('/health', [homeContents::class,'health']) -> name('health');

//ADMIN//
Route::get('/admin', [DashboardController::class,'index']) -> name('admin');

//PENDING//
Route::get('admin/pending', [RequestController::class,'index']) -> name('pending.index');
Route::post('admin/pending/confirm', [ConfirmController::class,'store']) -> name('confirm.store');
Route::delete('admin/pending', [RequestController::class,'destroy']) -> name('pending.destroy');


//pending table confirm button//
Route::get('admin/confirm', [ConfirmController::class,'index']) -> name('confirm.index');
Route::delete('admin/confirm', [ConfirmController::class,'destroy']) -> name('confirm.destroy');
Route::get('admin/confirmed', [ConfirmedController::class,'index']) -> name('confirmed.index');



//RECORDS----Medical---//
Route::get('admin/medical', [MedicalController::class,'index']) -> name('medical.index');
Route::put('/medical/{id}', [MedicalController::class,'update'])-> name('medical.update');
Route::post('admin/medical', [MedicalController::class,'store'])-> name('medical.store');
Route::get('admin/medical/download', [MedicalController::class,'create'])-> name('medical.create');


//RECORDS----Pdl---//
Route::get('admin/pdl', [PdlController::class,'index']) -> name('pdl.index');
Route::put('/pdl/{id}', [PdlController::class,'update'])-> name('pdl.update');
Route::post('admin/pdl', [PdlController::class,'store'])-> name('pdl.store');
Route::get('admin/pdl/download', [PdlController::class,'create'])-> name('pdl.create');
//

//RECYCLEBIN//
Route::get('admin/recyclebin/medical', [MedicalRecyclebinController::class,'index']) -> name('medical.recyclebin.index');
Route::post('admin/recyclebin/medical', [MedicalRecyclebinController::class,'store']) -> name('medical.recyclebin.store');

Route::get('admin/recyclebin/pdl', [PdlRecyclebinController::class,'index']) -> name('pdl.recyclebin.index');
Route::post('admin/recyclebin/pdl', [PdlRecyclebinController::class,'store']) -> name('pdl.recyclebin.store');


/* ATTENDAMCE */
Route::get('admin/attendance', [AttendanceController::class,'index']) -> name('attendance.index');
Route::post('admin/Attendance', [AttendanceController::class,'store']) -> name('attendance.store');

/* CONTACT US */
Route::get('admin/contact', [ContactController::class,'index']) -> name('contact.index');
Route::post('admin/Contact', [ContactController::class,'store']) -> name('contact.store');
Route::delete('admin/contact', [ContactController::class,'destroy']) -> name('contact.destroy');


Route::get('admin/health', [HealthController::class,'index']) -> name('health.index');
Route::post('admin/confirmed', [ConfirmedController::class,'store']) -> name('confirmed.store');
Route::delete('admin/health', [HealthController::class,'destroy']) -> name('health.destroy');


/* SCHEDULE */
Route::get('admin/paabot', [PaabotController::class,'index']) -> name('paabot.index');
Route::put('/Paabot/{id}', [PaabotController::class,'update'])-> name('paabot.update');

/* Route::get('admin/dalaw', [DalawController::class,'index']) -> name('dalaw.index');
Route::put('/Dalaw/{id}', [DalawController::class,'update'])-> name('dalaw.update');

Route::get('admin/tawag', [TawagController::class,'index']) -> name('tawag.index');
Route::put('/Tawag/{id}', [TawagController::class, 'update'])-> name('tawag.update'); */

/* ANNOUNCEMENT */
Route::get('admin/announcement', [AnnouncementController::class,'index']) -> name('announcement.index');
Route::put('/Announcement/{id}', [AnnouncementController::class, 'update'])-> name('announcement.update');

Route::get('/send-mail',[MailController::class,'sendmail']);





