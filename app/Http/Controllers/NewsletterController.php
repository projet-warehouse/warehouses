<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function index()
    {
        return view('newsletter');
    }

    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) )
        {
            Newsletter::subscribePending($request->email);
            return redirect('newsletter')->with('succes', 'Merci d avoir souscrit');
        }
        return redirect('newsletter')->with('Echec', 'Vous êtes déjà abonné');

    }
}
