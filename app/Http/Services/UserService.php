<?php

namespace App\Http\Services;

use App\Http\Repositories\AdminRepository;
use App\Http\Repositories\PointRepository;
use App\Models\User;

class UserService
{
    /**
     * 比對帳號密碼
     * @param String $account
     * @param String $password
     * @return Boolean
     */
    public function login(String $account, String $password)
    {
        $user = User::where('name', $account)->first();

        if ($user && \Hash::check($password, $user->password)) {
            return true;
        }

        return false;
    }

    /**
     * 建立帳號
     * @param String $account
     * @param String $password
     * @param String $email
     */
    public function register(String $account, String $password, String $email)
    {
        $user = new User;
        $user->name = $account;
        $user->email = $email;
        $user->password = \Hash::make($password);
        $user->save();

        return 'OK';
    }
}
