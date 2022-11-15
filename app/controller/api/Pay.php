<?php

namespace app\controller\api;

use think\facade\Db;

class Pay
{
    public function orders($token = ' ', $price = ' ')
    {
        //获取订单编号
        $orderid = Db::name('order')->max("orderid");

        if ($price < 999999) {
            // 会员卡支付
            $vtotal = Db::table('order')->where(['orderid'=>$orderid])->value('vtotal');
            $vbalance = Db::table('user')->where(['membercard'=> $price])->value('vbalance');
            if ($vtotal <= $vbalance) {
                //会员卡余额充足
                //扣款
                $vbalance=$vbalance-$vtotal;
                $data = ['membercard'=>$price,'vbalance' => $vbalance];
                Db::table('user')->save($data);
                //更改订单状态
                $date = date('Y-m-d H:i:s');
                $data = ['orderid'=>$orderid,'amount'=>$vtotal,'end' => $date,'card'=>$price,'type'=>'会员','state'=>'已支付','onlineid'=>'0'];
                Db::table('order')->save($data);

                return '{"code": 0,"msg": "支付成功"}';
            } else {
                return '{"code": 2002,"msg": "会员卡余额不足"}';
            }
        }
//        $count = count(Db::name('order')->select());
        echo '';
    }

    public function ordersinfo($token = ' ')
    {
        //创建订单

        //检查
        $ptotal = Db::table('ordertmp0')->sum("ptotal");
        $vtotal = Db::table('ordertmp0')->sum("vtotal");
        if ($ptotal == 0 || $vtotal == 0) {
            //订单异常
            return '{"code": 2001,"msg": "订单异常或为空"}';
        }
        //创建


//        return result('{"orderid":"123","creation":"456","amount":"789","vamount":"789"}');
        //查询收银员是谁 传入
        $name = Db::table('useradmin')->where(['token' => $token])->value('nickname');
        $date = date('Y-m-d H:i:s');
        //主收银台支付 场次为0 介绍人为0 返佣为0不予计算

        //暂时不做支付方式判断
        //创建订单 先获取一次最后一个订单ID

        //若支付方式为会员支付传入会员卡号，否者传入0
//        $data = ['create' => $date, 'cashier' => $name, 'state' => '待支付', 'screen' => '0', 'introducer' => '无', 'balance' => '0', 'type' => "未支付"];
//        Db::name('order')->insert($data);

        //获取订单号

        //写入订单金额[未完成]
        //先获取 再写入
        $ptotal = Db::table('ordertmp0')->sum("ptotal");
        $vtotal = Db::table('ordertmp0')->sum("vtotal");



        $data = ['orderid' => "", 'cashier' => $name, 'state' => '待支付', 'screen' => '0', 'introducer' => '无', 'balance' => '0', 'type' => "未支付",'ptotal'=>$ptotal,'vtotal'=>$vtotal,'create'=>$date];
        Db::name('order')->insert($data);
        $orderid = Db::name('order')->max("orderid");
       // $result = Db::table('ordertmp0')->select();
//        echo result($result);
        //转移订单表
        $cursor = Db::table('ordertmp0')->cursor();
        foreach ($cursor as $order) {
            $data = ['orderid' => $orderid, 'commodity' => $order['barcode'], 'quantity' => $order['quantity']];
            Db::name('orderaffix')->insert($data);
        }
        //清空缓存表
        Db::table('ordertmp')->where("1=1")->delete();
        return '{"code": 0,"msg": "订单创建成功"}';

    }
}