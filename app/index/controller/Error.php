<?php
// +========================================
// Created by PhpStorm
// +========================================
// User: MK192
// +========================================
// DateTime: 2019/1/6 4:01
// +========================================
// Description: 空控制器处理
// +========================================

namespace app\index\controller;

class Error {
    public function index() {
        return view('common@error/index');
    }
}