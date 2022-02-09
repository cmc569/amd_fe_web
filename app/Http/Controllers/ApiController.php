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
            'step'      => 'required|string',
            'answer'    => 'nullable|string',
        ]);

        if (empty($validated)) {
            return response()->json(['status' => 400, 'message' => '參數錯誤']);
        }

        return $this->api_service->steps($request->ip(), $request->input('step'), $request->input('answer', null));
    }

    /**
     * 紀錄訪客資訊
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|string',
            'title'     => 'required|string',
            'company'   => 'required|string',
            'tel'       => 'required|string',
            'mobile'    => 'required|string',
            'email'     => 'required|Email',
            'contact'   => 'required|alpha|size:1',
            'buy'       => 'required',
        ]);

        if (empty($validated)) {
            return response()->json(['status' => 400, 'message' => '參數錯誤']);
        }

        \Log::info('register:');
        \Log::info($request->ip());
        \Log::info($request->input());

        return $this->api_service->register(
            $request->ip(),
            $request->input('name'),
            $request->input('title'),
            $request->input('company'),
            $request->input('tel'),
            $request->input('mobile'),
            $request->input('email'),
            $request->input('contact'),
            $request->input('buy'),
        );
    }
}
