<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        Mail::to('Bechir_ferjani@yahoo.fr')->send(new ContactMail($request->name, $request->email, $request->body));

        return response()->json('success');
    }
}
