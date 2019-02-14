<?php
// +========================================
// Created by PhpStorm
// +========================================
// User: MK192
// +========================================
// DateTime: 2019/1/6 2:45
// +========================================
// Description: 自定义助手类
// +========================================

if (!function_exists('ajax_return')) {
    /**
     * 接口调用数据返回方法定义
     * @param string|array  $data 具体数据
     * @param int           $code 返回的状态码
     * @param string        $msg  返回的信息提示
     * @return \think\response\Json
     */
    function ajax_return($data, $code, $msg) {
        $result = ['result' => $data, 'code' => $code, 'message' => $msg];
        return json($result);
    }
}