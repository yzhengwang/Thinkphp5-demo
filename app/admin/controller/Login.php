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
use think\Db;
use think\Request;
use think\Session;

class Login extends Controller {
    public function login() {
        if (Request::instance()->isPost()) {
            // 1.判断用户名或密码不为空
            // 2.查询数据库
            // 3.写入session
            // 4.存在则跳转到后台首页
            // 5.不存在则返回错误
            $username = input('post.username');
            $password = input('post.password');
            if (empty($username) || empty($password)) {
                return ajax_return('', 300, '用户名或密码为空');
            }
            $result = Db::table('basic_user')->where(['username' => $username, 'password' => md5($password)])->find();
            if ($result) {
                Session::set('username', $username);
                return ajax_return('', 200, '登陆成功');
            } else {
                return ajax_return('', 300, '用户名或密码错误');
            }
        } else {
            return view('index');
        }
    }
}