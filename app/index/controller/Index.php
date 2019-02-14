<?php
namespace app\index\controller;

use think\Db;

class Index {
    public function index() {
        $id = input("id");
        $result = Db::table("syd_area_cn")->where("parent_id", $id)->select();
        if ($result) {
            return ajax_return($result, 200, '获取成功');
        }
        return ajax_return(null, 300, '获取失败');
    }
}
