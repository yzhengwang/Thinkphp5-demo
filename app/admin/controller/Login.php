<?php
// +========================================
// Created by PhpStorm
// +========================================
// User: MK192
// +========================================
// DateTime: 2019/1/6 3:06
// +========================================
// Description: 登录注册类
// +========================================

namespace app\admin\controller;

use think\Controller;

class Login extends Controller {
    public function login() {
        return view('index');
    }
}