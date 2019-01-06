<?php
// +========================================
// Created by PhpStorm
// +========================================
// User: MK192
// +========================================
// DateTime: 2019/1/6 16:02
// +========================================
// Description: MK192
// +========================================

namespace app\common\controller;

use think\Controller;

class Error extends Controller {
    // 空控制器处理
    public function index() {
        return view('common@error/index');
    }

    // 空控制器空操作处理
    public function _empty() {
        return view('common@error/index');
    }
}