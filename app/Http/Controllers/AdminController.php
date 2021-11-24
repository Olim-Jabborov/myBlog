<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function users(){
        $users = User::all();
        return view('admin.users', ['data' => $users]);
    }

    public function contacts(){
        $contacts = Contact::all();
        return view('admin.contacts', ['contacts'=>$contacts]);
    }
}
