<?php

namespace app\controller\api;

use app\BaseController;
use think\facade\Db;

class Login extends BaseController
{
    public function login($username = '', $password = '')
    {
        $result = Db::table('useradmin')->where(['nickname' => $username, 'password' => $password])->value('token');
        if ($result == null) {
            echo '{"code": 1001,"msg": "登入失败","data": {"access_token": ""}}';
        } else {
            echo '{"code": 0 ,"msg": "登入成功","data": {"access_token": "' . $result . '"}}';
        }

    }

    public function username($token = '')
    {
        $result = Db::table('useradmin')->where(['token' => $token])->value('nickname');

        if ($result == null) {
            echo '{"code": 1001,"msg": "","data": {"username": ""}}';
        } else {
            echo '{"code": 0 ,"msg": "","data": {"username": "' . $result . '"}}';
        }
    }

    public function userinfo($token = '')
    {
        $result = Db::table('useradmin')->alias('a')->join('user b', 'a.phone=b.phone')->where(['token' => $token])->select();

        $result = str_replace('[', '', $result);
        $result = str_replace(']', '', $result);
        if ($result == null) {
            $result = Db::table('useradmin')->where(['token' => $token])->select();
        }
        $result = str_replace('[', '', $result);
        $result = str_replace(']', '', $result);
        if ($result == null) {
            echo '{"code": 1001,"msg": "","data": {: ""}}';
        } else {
            echo '{"code": 0 ,"msg": "","data":' . $result . '}';
        }
    }

    public function menu($token = '')
    {
        if(yanzen($token)!=null) echo yanzen();
        $result = Db::table('useradmin')->where(['token' => $token])->value('role');
        if ($result == "管理员") {
            return redirect('../../menu/1.json');
        }
        return redirect('../../menu/0.json');
    }

}
