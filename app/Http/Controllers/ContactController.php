<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\User;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function mailToAdmin(ContactFormRequest $message, User $user)
    {
        //get only users who are admins

        //send notification to admin users only

        //redirect user back with a message about their inquiry
    }
}
