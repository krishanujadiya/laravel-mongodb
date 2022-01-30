<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Artesaos\SEOTools\Facades\SEOTools;


class ContactController extends Controller
{
    public function contact()
    {
        SEOTools::setTitle('Contact Us');
        SEOTools::setDescription('Contact Us');
        SEOTools::opengraph()->addProperty('type', 'website');
        
        return view('contact-us');
    }

    public function privacy()
    {
        SEOTools::setTitle('Privacy Policy');
        SEOTools::setDescription('Privacy Policy');
        SEOTools::opengraph()->addProperty('type', 'website');
        
        return view('privacy-policy');
    }

    public function aboutUs()
    {
        SEOTools::setTitle('About Us');
        SEOTools::setDescription('About Us');
        SEOTools::opengraph()->addProperty('type', 'website');
        
        return view('about-us');
    }

    public function disclaimer()
    {
        SEOTools::setTitle('Disclaimer');
        SEOTools::setDescription('Disclaimer');
        SEOTools::opengraph()->addProperty('type', 'website');
        
        return view('disclaimer');
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'contact'   => 'required|digits:10',
            'email'     => 'required|email',
            'message'   => 'required',

        ]);

        $contact = $request->all();

        Contact::create($contact);

        return back()->with('success', 'Thank you for Contacting Us and Your Valuable Time.');
    }
}
