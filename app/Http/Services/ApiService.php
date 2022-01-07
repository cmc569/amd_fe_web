<?php

namespace App\Http\Services;

use App\Http\Repositories\StepRepository;
use App\Http\Repositories\CustomerRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ApiService
{
    private $step_repository;
    private $customer_repository;

    /**
     * @param StepRepository $step_repository
     * @param CustomerRepository $customer_repository
     */
    public function __construct(StepRepository $step_repository, CustomerRepository $customer_repository)
    {
        $this->step_repository = $step_repository;
        $this->customer_repository = $customer_repository;
    }

    /**
     * 紀錄活動階段資訊
     * @param String $step
     * @param String $answer
     * @return \Illuminate\Http\JsonResponse
     */
    public function steps(String $step, String $answer)
    {
        if ($this->step_repository->createSteps($step, $answer)) {
            return response()->json(['status' => 200, 'message' => '儲存成功']);
        }

        return response()->json(['status' => 400, 'message' => '儲存失敗']);
    }
    
}
