<?php

namespace App\Http\Controllers;

use App\Mail\UserContact;
use Illuminate\Http\Request;
use App\Models\InfoContact;
use Illuminate\Support\Facades\Mail;

class ContactController
{
    public function __invoke(Request $request)
    {

        $contact = InfoContact::create(
            $request->only([
                'name', 'email', 'message'
            ])
        );

        Mail::to('info@cooedumag.edu.co')->send(new UserContact($contact));

        return response(json_encode(['message' => 'Saved.']), 201)->header('Content-Type', 'text/json');

    }
}