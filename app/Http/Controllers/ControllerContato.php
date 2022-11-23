<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;

class ControllerContato extends Controller
{
    public function enviaMsg(Request $request)
    {
        Mail::to($request->email)
         ->bcc('testebistec@gmail.com')
         ->send(new ContatoEmail($request));
        return redirect('/contato')->with('mensagem','Contato enviado com sucesso!');
    }
}

