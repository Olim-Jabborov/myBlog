<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Review;
use App\Models\Contact;


class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function check_admin(){
        $usertype = Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.adminpage');
        }
        else{
            return view('home');
        }
    }

    public function about(){
        return view('about');
    }

    public function review(){
        $reviews = new Review();
        return view('review', ['reviews' => $reviews->orderBy('id', 'desc')->get()]);
    }

    public function review_check(Request $request){
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:10|max:500'
        ]);

        $review = new Review();

        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect('review');
    }

    public function contact(){
        return view('contact');
    }

    public function contact_check(Request $request){
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact();

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect('contact')->with('success', "Added successfully!");
    }
}
