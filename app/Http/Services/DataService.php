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
        $total = $this->data_repository->getAllData();    //總流量
        $game_all = $this->data_repository->getGameAll();   //總遊戲人數

        $play_again = $this->data_repository->getStageCount(9)->total;   //第9階段的人次

        $contact_all = $this->data_repository->contactAll();    //總名單人數
        $contact_distinct = $this->data_repository->contactDistinct();  //總不重複名單人數

        // $first_stage = $this->data_repository->getStageCount(1)->total;   //第1階段的人次
        // $all = $this->data_repository->getAllSteps()->toArray();    //各階段數據
        

        // $data = [];
        // $total = 0;
        // if (count($all) > 0) {
        //     foreach ($all as $item) {
        //         $total += (int)$item['total'];
        //         $rating = (int)round(($item['total'] / $first_stage) * 100);

        //         if ($rating > 100) {
        //             $rating = 100;
        //         }

        //         $data[$item['step']] = [
        //             'step'      => $item['step'],
        //             'total'     => $item['total'],
        //             'percent'   => $rating.'%',
        //         ];
        //     }
        // }

        return [
            'total'         => $total,
            'game'          => $game_all,
            'again'         => $play_again,
            'contact_all'   => $contact_all,
            'contact'       => $contact_distinct,
            // 'data'          => $data,
        ];
    }

    /**
     * 取得使用者資訊
     * @param String $start
     * @param String $end
     */
    public function getUser(String $start=null, String $end=null)
    {
        $users = $this->data_repository->getUser($start, $end);
      
        $data = [];
        foreach ($users as $user) {
            $data[] = [
                'ip'            => $user['ip'],
                'name'          => $user['name'],
                'title'         => $user['title'],
                'company'       => $user['company'],
                'tel'           => $user['tel'],
                'mobile'        => $user['mobile'],
                'email'         => $user['email'],
                'purchase'      => $user['purchase'],
                'contact'       => $user['contact'],
                'created_at'    => $user['created_at'],
            ];
        }
        
        return response()->json(['data' => $data]);
    }

}
