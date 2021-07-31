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

    public function contactSubmit()
    {
        $contact = new Contact();

        $contact->name = request('name');
        $contact->email = request('email');
        $contact->contact = request('contact');
        $contact->message = request('message');
        $contact->save();

        return redirect()->route('home');
    }
}
