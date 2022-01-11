<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\DataService;

class DataController extends Controller
{
    private $data_service;

    //
    public function __construct(DataService $data_service)
    {
        $this->data_service = $data_service;
    }

    /**
     * 
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * 
     */
    public function info()
    {
        return view('admin.userInfo');
    }

    /**
     * 
     */
    public function getStage()
    {
        return $this->data_service->getStage();
    }

    /**
     * 
     * @param String $start
     * @param String $end
     */
    public function getUser(Request $request)
    {
        $start = preg_match("/^\d{4}\-\d{1, 2}\-\d{1, 2} \d{2}:\d{2}:\d{2}$/", $request->input('start')) ?? null;
        $end = preg_match("/^\d{4}\-\d{1, 2}\-\d{1, 2} \d{2}:\d{2}:\d{2}$/", $request->input('end')) ?? null;

        if (empty($start) || empty($end)) {
            $start = null;
            $end = null;
        } else {
            $start = date("Y-m-d", strtotime($start)).' 00:00:00';
            $end = date("Y-m-d", strtotime($end)).' 23:59:59';
        }

        return $this->data_service->getUser($start, $end);
    }

    public function test()
    {
        return $this->data_service->getUser();
        // return $this->data_service->getUser('2022-01-11 00:00:00', '2022-01-11 23:59:59');
    }
}
