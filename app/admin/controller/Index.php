<?php
// +========================================
// Created by PhpStorm
// +========================================
// User: MK192
// +========================================
// DateTime: 2019/1/6 1:42
// +========================================
// Description: MK192
// +========================================

namespace app\admin\controller;

use think\Db;

class Index extends Father {
    public function index() {
        $this->assign('data', ['good', 'morning']);
        return $this->fetch('index');
    }

    public function getList() {
        $data = Db::table('basic_user')->field('id,name')->limit(0, 10)->select();
        if (!empty($data)) {
            return ajax_return($data, 200, '获取成功');
        }
    }
}