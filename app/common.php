<?php

use think\facade\Db;

// 应用公共文件
function yanzen($token ='')
{
    if ($token == null) return '{"code": 1001,"msg": "无访问权限"}';

    $result = Db::table('useradmin')->where(['token' => $token])->value('role');
    if ($result == null) {
        return true;
    }
    return null;


}
function result($result='',$count=''){
    if ($count!=null) return '{"code": 0,"msg": "请求成功","count": '.$count.',"data": ' . $result . '}';
    if ($result!=null)return '{"code": 0 ,"msg": "请求成功","data":' . $result . '}';
    return '{"code": 0,"msg": "请求成功"}';
}