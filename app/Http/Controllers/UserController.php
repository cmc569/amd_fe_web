<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\UserService;

class UserController extends Controller
{
    private $user_service;

    //
    public function __construct(UserService $user_service)
    {
        $this->user_service = $user_service;
    }

    /**
     * 顯示登入頁面
     */
    public function index(Request $request)
    {
        if ($request->session()->get('isLogin')) {
            return redirect()->route('dashboard');
        }
        
        return redirect()->route('login');
    }

    /**
     * 顯示登入頁面
     */
    public function login(Request $request)
    {
        $request->session()->forget('isLogin');
        return view('admin.login');
    }

    /**
     * 登入處理
     */
    public function verify(Request $request)
    {
        $validated = $request->validate([
            'account'   => 'required|string',
            'password'  => 'required|string',
        ]);

        if (empty($validated)) {
            return redirect()->route('login')->with('error', '請輸入正確的登入帳號密碼');
        }

        if ($this->user_service->login($request->input('account'), $request->input('password'))) {
            $request->session()->put('isLogin', 'OK');
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('error', '請輸入正確的登入帳號密碼');
        }
    }

    /**
     * logout
     * @param Request $request
     */
    public function logout(Request $request) {
        $request->session()->forget('isLogin');
        return redirect()->route('admin');
    }

    /**
     * 建立帳號
     */
    public function register()
    {
        $account    = 'admin';
        $email      = $account.'@amd';
        $password   = 'admin123admin';

        return $this->user_service->register($account, $password, $email);
    }
}
