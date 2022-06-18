<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $count = Contact::count();
        $messages = Contact::paginate(5);
        return view('BJMP.admin.dashboard.dashboard', compact('count', 'messages'));
    }
}
