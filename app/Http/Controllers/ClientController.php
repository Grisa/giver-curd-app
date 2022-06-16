<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Http\Services\ClientService;

class ClientController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $clientService;

    function __construct()
    {
        $this->clientService = new ClientService();
    }

    public function getClientList()
    {
        return $this->clientService->getList();
    }

    public function getNameCount()
    {
        return $this->clientService->getNameCount();
    }

    public function getGenderCount()
    {
        return $this->clientService->getGenderCount();
    }

    public function getMailCount()
    {
        return $this->clientService->getMailCount();
    }

    public function importFile(Request $request)
    {
        return $this->clientService->importFile($request->file('file'));
    }

    public function deleteClient(Request $request)
    {
        return $this->clientService->deleteClient($request->id);
    }
}
