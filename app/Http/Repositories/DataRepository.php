<?php

namespace App\Http\Repositories;

use App\Models\Step;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DataRepository
{
    private $customers;
    private $steps;

    /**
     * 
     */
    public function __construct(Step $steps, Customer $customers)
    {
        $this->customers = $customers;
        $this->steps = $steps;
    }

    /**
     * 總流量
     */
    public function getAllSteps()
    {
        return $this->steps->select('step', DB::raw('count(*) as total'))->groupBy('step')->get();
    }

    public function getStageCount(Int $step)
    {
        return $this->steps->select(DB::raw('count(*) as total'))->where('step', $step)->first();
    }

    /**
     * 總遊戲人數
     */
    public function getGameAll()
    {
        return $this->steps->where('step', '2')->count();
    }

    /**
     * 總名單人數
     */
    public function contactAll()
    {
        return $this->customers->all()->count();
    }

    /**
     * 總不重複名單人數
     */
    public function contactDistinct()
    {
        return $this->customers->all()->groupBy('mobile')->count();
    }

    /**
     * 使用者資訊
     * @param String $start
     * @param String $end
     */
    public function getUser(String $start=null, String $end=null)
    {
        if ($start && $end) {
            return $this->customers->whereBetween('created_at', [$start, $end])->groupBy('mobile')->orderBy('created_at', 'DESC')->orderBy('created_at', 'desc')->get(['ip', 'name', 'title', 'company', 'tel', 'mobile', 'email', 'contact', 'created_at'])->unique('mobile');
        }

        return $this->customers->select('ip', 'name', 'title', 'company', 'tel', 'mobile', 'email', 'contact', 'created_at')->orderBy('created_at', 'desc')->get()->unique('mobile');
    }

}