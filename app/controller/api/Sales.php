<?php

namespace app\controller\api;

use think\facade\Db;

class Sales
{
    public function ordertmp_i($token='',$barcode = '')

    {
//        if(yanzen($token)!=null) return yanzen();
        $result = Db::table('ordertmp')->where(['barcode' => $barcode])->value('quantity');
        if ($result == null) {
            $data = ['barcode' => $barcode, 'quantity' => '1'];
            Db::name('ordertmp')->insert($data);
        } else {
            $quantity = $result + 1;
            $data = ['barcode' => $barcode, 'quantity' => $quantity];
            Db::name('ordertmp')->save($data);
        }
        echo result();
    }

    public function ordertmp_u($token='',$barcode = '',$quantity='')

    {
//        if (yanzen($token) != null) return yanzen();

        if ($barcode ==null) Db::table('ordertmp')->where("1=1")->delete();
        elseif ($quantity == '0') Db::table('ordertmp')->where('barcode',$barcode)->delete();
        else{
        $data = ['barcode' => $barcode, 'quantity' => $quantity];
        Db::name('ordertmp')->save($data);}

        echo result();
    }
    public function ordertmp_s($token='',$barcode = '')

    {
        if(yanzen($token)!=null) return yanzen();
//        $result = Db::table('ordertmp')->alias('a')->join('merchandise b', 'a.barcode=b.barcode')->select();
        $result = Db::table('ordertmp0')->select();
        echo result($result);
    }

    public function member($token='',$membercard = '')

    {
            $result = Db::table('user')->where(['membercard' => $membercard])->select();
            $result = str_replace('[', '', $result);
            $result = str_replace(']', '', $result);
            echo result($result);
    }

    public function game($token='',$gameid = '',$sell= '',$number = '')

    {
        $date = date('Y-m-d H:i:s');
        $data = ['gameid' => $gameid, 'sell' => $sell, 'znumber' => $number, 'create' => $date,'paid'=>'0','state'=>'待开始'];
        Db::name('game')->save($data);
        echo result();

//            $result = Db::table('merchandisegame')->where(['barcode' => $result])->select();
//            $result = str_replace('[', '', $result);
//            $result = str_replace(']', '', $result);

    }
}