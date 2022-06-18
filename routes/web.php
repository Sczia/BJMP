<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\homeContents;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\MedicalRecyclebinController;
use App\Http\Controllers\PaabotController;
use App\Http\Controllers\PdlController;
use App\Http\Controllers\PdlRecyclebinController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SMS;
use App\Mail\Email;
use App\Mail\WelcomeMail;
use App\Models\Appointment;
use App\PdlRecyclebin;
use Illuminate\Auth\Events\Login;
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
Route::get('/', [homeContents::class, 'opener'])->name('opener');
Route::get('/home', [homeContents::class, 'landing'])->name('landing');
Route::get('/aboutus', [homeContents::class, 'aboutus'])->name('aboutus');
Route::get('/calendar', [homeContents::class, 'calendar'])->name('calendar');
Route::get('/appointment', [homeContents::class, 'appointment'])->name('appointment');

//appointment//
Route::get('/guidlines', [homeContents::class, 'guidlines'])->name('guidlines');
Route::get('/contactus', [homeContents::class, 'contactus'])->name('contactus');
Route::get('/health', [homeContents::class, 'health'])->name('health');

//ADMIN//
Route::get('/admin', [DashboardController::class, 'index'])->name('admin');

//PENDING//
Route::get('admin/appointment', [AppointmentController::class, 'index'])->name('pending.index');
Route::post('admin/appointment/confirm', [ConfirmController::class, 'store'])->name('confirm.store');
Route::delete('admin/appointment', [AppointmentController::class, 'destroy'])->name('pending.destroy');


//pending table confirm button//
Route::get('admin/confirm', [ConfirmController::class, 'index'])->name('confirm.index');
Route::delete('admin/confirm', [ConfirmController::class, 'destroy'])->name('confirm.destroy');
Route::get('admin/confirmed', [ConfirmedController::class, 'index'])->name('confirmed.index');



//RECORDS----Medical---//
Route::get('admin/medical', [MedicalController::class, 'index'])->name('medical.index');
Route::put('/medical/{id}', [MedicalController::class, 'update'])->name('medical.update');
Route::post('admin/medical', [MedicalController::class, 'store'])->name('medical.store');
Route::delete('admin/medical/{id}', [MedicalController::class, 'destroy'])->name('medical.destroy');

Route::get('admin/medical/download', [MedicalController::class, 'create'])->name('medical.create');


//RECORDS----Pdl---//
Route::get('admin/pdl', [PdlController::class, 'index'])->name('pdl.index');
Route::put('/pdl/{id}', [PdlController::class, 'update'])->name('pdl.update');
Route::post('admin/pdl', [PdlController::class, 'store'])->name('pdl.store');
Route::delete('admin/pdl/{id}', [PdlController::class, 'destroy'])->name('pdl.destroy');

Route::get('admin/pdl/download', [PdlController::class, 'create'])->name('pdl.create');


//RECYCLEBIN MEDICAL//
Route::get('admin/recyclebin/medical', [MedicalRecyclebinController::class, 'index'])->name('medical.recyclebin.index');
Route::post('admin/recyclebin/medical', [MedicalRecyclebinController::class, 'store'])->name('medical.recyclebin.store');
Route::delete('/admin/recyclebin/medical/{id}', [MedicalRecyclebinController::class, 'destroy'])->name('medical.recyclebin.destroy');

//RECYCLEBIN PDL//
Route::get('admin/recyclebin/pdl', [PdlRecyclebinController::class, 'index'])->name('pdl.recyclebin.index');
Route::post('admin/recyclebin/pdl', [PdlRecyclebinController::class, 'store'])->name('pdl.recyclebin.store');
Route::delete('/admin/recyclebin/pdl/{id}', [PdlRecyclebinController::class, 'destroy'])->name('pdl.recyclebin.destroy');

/* ATTENDAMCE */
Route::get('admin/Attendance', [AttendanceController::class, 'index'])->name('attendance.index');
Route::post('admin/Attendance', [AttendanceController::class, 'store'])->name('attendance.store');
Route::get('admin/Attendance/download', [AttendanceController::class, 'create'])->name('attendance.create');

/* CONTACT US */
Route::get('admin/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('admin/Contact', [ContactController::class, 'store'])->name('contact.store');
Route::delete('admin/contact', [ContactController::class, 'destroy'])->name('contact.destroy');
Route::post('admin/reply', [MailController::class, 'reply'])->name('contact.reply');


/* HEALTH*/
Route::get('admin/health', [HealthController::class, 'index'])->name('health.index');
Route::post('admin/confirmed', [ConfirmedController::class, 'store'])->name('confirmed.store');
Route::delete('admin/health', [HealthController::class, 'destroy'])->name('health.destroy');


/* SCHEDULE */
Route::get('admin/schedule', [ScheduleController::class, 'index'])->name('paabot.index');
Route::put('/Scheddule/{id}', [ScheduleController::class, 'update'])->name('paabot.update');



/* ANNOUNCEMENT */
Route::get('admin/announcement', [AnnouncementController::class, 'index'])->name('announcement.index');
Route::put('/Announcement/{id}', [AnnouncementController::class, 'update'])->name('announcement.update');

Route::get('/send-mail', [MailController::class, 'sendmail']);
Route::get('/sendSmsNotificaition', [SMS::class, 'sendSmsNotificaition']);


/* EVENTS or CALENDAR*/
Route::get('admin/events', [EventsController::class, 'index'])->name('events.index');
Route::post('admin/events', [EventsController::class, 'store'])->name('events.store');
Route::put('/Events/{id}', [EventsController::class, 'update'])->name('events.update');
Route::delete('admin/events', [EventsController::class, 'destroy'])->name('events.destroy');

/* MS WORD */
Route::get('download/medical/{id}', [MedicalController::class, 'download'])->name('medical.download');
Route::get('download/pdl/{id}', [PdlController::class, 'download'])->name('pdl.download');


/* LOGIN */
Route::get('login', [LoginController::class, 'index'])->name('login.index');
Route::post('login/user', [LoginController::class, 'authenticate'])->name('login.user');
Route::post('logout/user',  [LoginController::class, 'logout'])->name('logout.user');
