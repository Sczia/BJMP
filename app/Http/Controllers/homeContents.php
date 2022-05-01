<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Appointment;
use App\Models\events;
use App\Models\Schedule;
use Illuminate\Http\Request;

class homeContents extends Controller
{
 public function opener (){
   return view ('BJMP.homecontents.opener');
 }
 public function landing (){
    $dalaw=Schedule::where('sched_type','Dalaw')->first();
    $tawag=Schedule::where('sched_type','Tawag')->first();
    $paabot=Schedule::where('sched_type','Paabot')->first();
    $announcement=Announcement::all();
    return view ('BJMP.homecontents.landing', compact('dalaw','tawag','paabot','announcement'));


 }
 public function aboutus (){
   return view ('BJMP.homecontents.aboutus');
 }
 public function appointment (){
   return view ('BJMP.homecontents.appointment');
 }
 public function guidlines (){
     $count=Appointment::count();

   return view ('BJMP.homecontents.guidelines', compact('count'));
 }
 public function calendar (){
     $events=events::all();
   return view ('BJMP.homecontents.calendar' , compact('events'));
 }
 public function contactus (){
   return view ('BJMP.homecontents.contactus');
 }
 public function health (){
   return view ('BJMP.homecontents.health');
 }
}

