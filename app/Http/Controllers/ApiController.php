<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    private $api_service;

    /**
     * @param ApiService $api_service
     */
    public function __construct(ApiService $api_service)
    {
        $this->api_service = $api_service;
    }

    /**
     * 紀錄活動階段資訊
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function steps(Request $request)
    {
        $validated = $request->validate([
            'step'      => 'required|string|max:255',
            'answer'    => 'nullable|string',
        ]);

        if (empty($validated)) {
            return response()->json(['status' => 400, 'message' => '參數錯誤']);
        }

        return $this->api_service->steps($request->input('step'), $request->input('answer', ''));
    }
}
