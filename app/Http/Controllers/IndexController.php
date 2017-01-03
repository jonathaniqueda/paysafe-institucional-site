<?php

namespace App\Http\Controllers;

use App\Custom\Request\RequestMessage;
use App\Repository\ApiPaySafe;
use App\Repository\ApiPaySafeRepository;
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

        $userIp = \Request::ip();
        $apiPaySafeRespository = new ApiPaySafeRepository();
        $getLastOrders = $apiPaySafeRespository->getLastOrdersByIp($userIp);

        $lastOrder = null;
        if (!empty($getLastOrders)) {
            $lastOrder = $getLastOrders[0];
        }

        return view('page.welcome', ['lastOrder' => $lastOrder]);
    }
}
