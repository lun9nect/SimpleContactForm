<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactForm;

class ContactFormController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactForm()
    {
        //return view('contactForm');
        /*Passing data from Model to view in Laravel */
        $data = ContactForm::all();
        return view('contactForm')->with('data', $data);
        //return view('contactMessage')->with('data', $data);
    }

    public function contactFormPost(Request $request)
    {
        $this->validate($request, [
            /*Validation In Controller*/
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        ContactForm::create($request->all());

        return back()->with('success', 'Thanks for contacting us!');
    }

    public function contactMessage()
    {
        //return view('contactForm');
        /*Passing data from Model to view in Laravel */
        $data = ContactForm::all();
        return view('contactMessage')->with('data', $data);

    }


}
