<?php
// +========================================
// Created by PhpStorm
// +========================================
// User: MK192
// +========================================
// DateTime: 2019/1/6 3:02
// +========================================
// Description: 父控制器
// +========================================

namespace app\admin\controller;

use think\Controller;

class Father extends Controller {

    /**
     * Father constructor.
     */
    public function __construct() {
        parent::__construct();
        if (config('user_info') == null) {
            $this->isLogin();
        }
    }

    // 空操作处理
    public function _empty() {
        return view('common@error/index');
    }

    // 判断是否登陆
    public function isLogin() {
        $this->redirect('Login/login');
    }
}