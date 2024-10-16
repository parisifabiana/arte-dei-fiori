<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        try {
            Mail::to('fabianaparisi.itconsulting@outlook.it')->send(new ContactFormMail($validatedData));
            
            return redirect()->route('contact')->with('success', 'Grazie per averci contattato! Ti risponderemo presto.');
        } catch (\Exception $e) {
            // Log dell'errore
            Log::error('Errore nell\'invio dell\'email: ' . $e->getMessage());
            
            return redirect()->route('contact')->with('error', 'Si è verificato un errore nell\'invio del messaggio. Per favore, riprova più tardi.');
        }
    }
}