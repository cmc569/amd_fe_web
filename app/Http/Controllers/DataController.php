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
        $data = $this->data_service->getStage();
        return view('admin.dashboard', compact('data'));
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
    public function getUser(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');

        $start = preg_match("/^\d{4}\-\d{2}\-\d{2}$/", $start) ? $start : null;
        $end = preg_match("/^\d{4}\-\d{2}\-\d{2}$/", $end) ? $end : null;

        if (empty($start) || empty($end)) {
            $start = null;
            $end = null;
        } else {
            $start .= ' 00:00:00';
            $end .= ' 23:59:59';
        }

        return $this->data_service->getUser($start, $end);
    }
}
