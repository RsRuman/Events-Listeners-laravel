<?php

namespace App\Http\Controllers;

use App\Events\NewsletterSubscriberEvent;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){
       $request->validate([
           'email' => 'required|unique:subscribers|max:30'
       ]);
       event(new NewsletterSubscriberEvent($request->email));

       return back();
    }
}
