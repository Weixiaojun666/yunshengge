<?php

namespace app\controller\api;

use think\facade\Db;

class Orderform
{
    public function pointslist_i($token = '')
    {
        if (yanzen($token) != null) return yanzen();

    }

    public function pointslist_u($token = '')
    {
        if (yanzen($token) != null) return yanzen();


    }

    public function pointslist_s($token = '', $limit = '10', $page = '1')
    {
        if (yanzen($token) != null) return yanzen();
        $size = ($page - 1) * $limit;

        $count = count(Db::name('order')->select());
        //$result = Db::name('order')->alias('a')->join('user b', 'a.card=b.membercard')->limit($size, $limit)->select();
        $result = Db::name('order')->alias('a')->join('user b', 'a.card=b.membercard')->order('orderid', 'desc')->limit($size, $limit)->select();
        echo '{"code": 0,"msg": "","count": ' . $count . ',"data": ' . $result . '}';


    }

    public function scenelist_i($token = '', $gameid = '', $number = '', $sell = '')
    {
        if (yanzen($token) != null) return yanzen();
        $date = date('Y-m-d H:i:s');
        $data = ['gameid' => $gameid, 'number' => $number, 'sell' => $sell, 'wxid' => '', 'create' => $date,];
        Db::name('user')->insert($data);

    }

    public function scenelist_u($token = '', $limit = '10', $page = '1')
    {
        if (yanzen($token) != null) return yanzen();
    }

    public function scenelist_s($token = '', $limit = '10', $page = '1')
    {
        if (yanzen($token) != null) return yanzen();
        $size = ($page - 1) * $limit;


        $count = count(Db::name('game')->select());
        $result = Db::name('game')->alias('a')->join('merchandisegame b', 'a.gameid=b.barcode')->join('useradmin c', 'a.sell=c.adminid')->order('sid', 'desc')->limit($size, $limit)->select();
        echo '{"code": 0,"msg": "","count": ' . $count . ',"data": ' . $result . '}';


    }

    public function withdrawlist_i($token = '', $limit = '10', $page = '1')
    {
        if (yanzen($token) != null) return yanzen();
    }

    public function withdrawlist_u($token = '', $limit = '10', $page = '1')
    {
//        if(yanzen($token)!=null) return yanzen();
    }

    public function withdrawlist_s($token = '', $limit = '10', $page = '1')
    {
        if (yanzen($token) != null) return yanzen();

    }


}