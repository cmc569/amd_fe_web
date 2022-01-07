<?php

namespace App\Http\Repositories;

use App\Models\Step;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StepRepository
{
    private $steps;
    /**
     * 
     */
    public function __construct(Step $steps)
    {
        $this->steps = $steps;
    }

    /**
     * 紀錄活動階段資訊
     * @param String $step
     * @param String $answer
     */
    public function createSteps(String $step, String $answer)
    {
        return $this->steps->create([
            'step'      => $step,
            'answer'    => $answer,
        ]);
    }
}