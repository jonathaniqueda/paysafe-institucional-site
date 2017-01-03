<?php
/**
 * Created by PhpStorm.
 * User: iqueda
 * Date: 1/3/17
 * Time: 11:50 AM
 */

namespace App\Repository;

use App\Custom\Request\RequestRest;

class ApiPaySafeRepository
{

    private $requestRest;

    public function __construct()
    {
        $this->requestRest = new RequestRest(getenv('URL_API_PAYSAFE'));
    }

    public function getLastOrdersByIp($currentIp)
    {
        $getResults = $this->requestRest->get('get-last-order-by-ip/' . $currentIp)->decode();

        if ($getResults->status == 'success') {
            return $getResults->response->results;
        } else {
            throw new \Exception('Ocorreu um erro ao tentar acessar a API.');
        }
    }

}