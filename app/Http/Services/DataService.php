<?php

namespace App\Http\Services;

use App\Http\Repositories\DataRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class DataService
{
    private $data_repository;

    /**
     * 
     */
    public function __construct(DataRepository $data_repository)
    {
        $this->data_repository = $data_repository;
    }

    /**
     * 取得各階段數據
     */
    public function getStage()
    {
        $game_all = $this->data_repository->getGameAll();   //總遊戲人數

        $contact_all = $this->data_repository->contactAll();    //總名單人數
        $contact_distinct = $this->data_repository->contactDistinct();  //總不重複名單人數

        $last_stage = $this->data_repository->getLastStageCount()->total;   //最後(第8階段)階段的人次
        $all = $this->data_repository->getAllSteps()->toArray();    //各階段數據

        $data = [];
        $total = 0;
        if (count($all) > 0) {
            foreach ($all as $item) {
                $total += (int)$item['total'];

                $data[$item['step']] = [
                    'total'     => $item['total'],
                    'persent'   => (int)round(($last_stage / $item['total']) * 100),
                ];
            }
        }

        return response()->json([
            'status'        => 200,
            'total'         => $total,
            'game'          => $game_all,
            'contact_all'   => $contact_all,
            'contact'       => $contact_distinct,
            'data'          => $data,
        ]);
    }

    /**
     * 取得使用者資訊
     * @param String $start
     * @param String $end
     */
    public function getUser(String $start=null, String $end=null)
    {
        $users = $this->data_repository->getUser($start, $end);
        // dd($users);
        return response()->json([
            'status'    => 200,
            'data'      => $users,
        ]);
    }

}
