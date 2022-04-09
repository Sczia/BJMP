<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin (){
        $count=Contact::count();
        $messages = Contact::paginate(5);
        return view ('BJMP.admin.dashboard.dashboard', compact('count','messages'));
      }
    public function login(){
        return view ('BJMP.admin.layouts.login');
      }


}
