<?php

namespace App\Http\Controllers;

use App\Custom\Request\RequestMessage;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @return string
     */
    public function home(Request $req)
    {
        if ($req->isMethod('POST')) {
            $test = true;
            return $test ? RequestMessage::success(['Adicionado com sucesso!']) : RequestMessage::warning(['Erro!']);
        }

        return view('page.welcome');
    }
}
