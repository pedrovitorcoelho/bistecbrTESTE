<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoLetter;

class ControllerLetter extends Controller
{
    public function enviaLetter(Request $request)
    {
        Mail::to($request->email)
         ->bcc('testebistec@gmail.com')
         ->send(new ContatoLetter($request));
        return redirect('/enviaLetter')->with('mensagem','Contato enviado com sucesso!');
    }
}

