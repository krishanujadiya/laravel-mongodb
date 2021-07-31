<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $contactCount = Contact::count('id');

        return view('backend.dashboard', compact(
            'contactCount',
        ));
    }
}
