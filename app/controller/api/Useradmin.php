<?php

namespace app\controller\api;

use think\facade\Db;

class Useradmin
{

    public function userlist_s($token = '',$limit = '',$page = '')

    {
        if(yanzen($token)!=null) return yanzen();
        $size = ($page - 1) * $limit;
        $count = count(Db::name('useradmin')->select());
        $result = Db::name('useradmin')->limit($size,$limit)->select();
        echo result($result,$count);
    }

    public function userlist_i($token = '',$username = '', $nickname = '', $phone = '', $partner = '', $yhcard = '', $sex = '', $assess = '', $role = '')

    {
        if(yanzen($token)!=null) return yanzen();
        $date = date('Y-m-d H:i:s');
        $data = ['username' => $username, 'nickname' => $nickname, 'sex' => $sex, 'phone' => $phone, 'wxid' => '', 'time' => $date, 'yhcard' => $yhcard, 'partner' => $partner, 'assess' => $assess, 'role' => $role];
        Db::name('useradmin')->insert($data);
        echo result();
    }

    public function userlist_u($token = '',$adminid = '', $username = '', $nickname = '', $phone = '', $partner = '', $yhcard = '', $sex = '', $assess = '', $role = '')

    {
//        if(yanzen($token)!=null) return yanzen();
        $data = ['adminid' => $adminid, 'username' => $username, 'nickname' => $nickname, 'sex' => $sex, 'phone' => $phone, 'wxid' => '', 'yhcard' => $yhcard, 'partner' => $partner, 'assess' => $assess, 'role' => $role];
        Db::name('useradmin')->save($data);
        echo result();
    }
    public function member_s($token = '',$limit = '',$page = '')

    {
        if(yanzen($token)!=null) return yanzen();

        $size = ($page - 1) * $limit;
        $count = count(Db::table('user')->select());
        $result = Db::table('user')->limit($size,$limit)->select();
        echo result($result,$count);
    }

    public function member_i($token = '',$name = '', $phone = '', $partner = '', $sex = '')

    {
        if(yanzen($token)!=null) return yanzen();
        $date = date('Y-m-d H:i:s');
        $data = ['name' => $name, 'sex' => $sex, 'phone' => $phone, 'wxid' => '', 'time' => $date, 'partner' => $partner];
        Db::name('user')->insert($data);
        echo result();
    }

    public function member_u($token = '',$userid = '', $name = '', $phone = '', $partner = '', $membercard = '', $sex = '')

    {
//        if(yanzen($token)!=null) return yanzen();
        $data = ['userid' => $userid, 'name' => $name, 'sex' => $sex, 'phone' => $phone, 'wxid' => '', 'membercard' => $membercard, 'partner' => $partner];
        Db::name('user')->save($data);
        echo result();
    }



}