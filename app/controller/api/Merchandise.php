<?php

namespace app\controller\api;

use think\facade\Db;

class Merchandise
{
    public function game_s($token = '',$limit = '10',$page = '1')
    {
        if(yanzen($token)!=null) return yanzen();
        $size = ($page - 1) * $limit;

        $count = count(Db::table('merchandisegame')->select());
        $result = Db::table('merchandisegame')->limit($size,$limit)->select();
        echo result($result,$count);
    }

    public function game_i($token = '',$barcode = '', $name = '', $number = '', $price = '', $member = '', $commission = '', $integral = '', $type = '')
    {
        if(yanzen($token)!=null) return yanzen();
        $data = ['id' => '', 'barcode' => $barcode, 'name' => $name, 'number' => $number, 'price' => $price, 'member' => $member, 'commission' => $commission, 'integral' => $integral, 'type' => $type];
        Db::name('merchandisegame')->insert($data);
        echo result();
    }

    public function game_u($token = '',$id = '', $barcode = '', $name = '', $number = '', $price = '', $member = '', $commission = '', $integral = '', $type = '')
    {
//        if(yanzen($token)!=null) return yanzen();
        $data = ['id' => $id, 'barcode' => $barcode, 'name' => $name, 'number' => $number, 'price' => $price, 'member' => $member, 'commission' => $commission, 'integral' => $integral, 'type' => $type];
        Db::name('game')->save($data);
        echo result();
    }


    public function ordinary_s($token = '',$limit = '10',$page = '1')
    {
        if(yanzen($token)!=null) return yanzen();
        $size = ($page - 1) * $limit;
        $count = count(Db::table('merchandiseordinary')->select());
        $result = Db::table('merchandiseordinary')->limit($size,$limit)->select();
        echo result($result,$count);
    }

    public function ordinary_i($token = '',$barcode = '', $name = '', $price = '', $purchase = '', $member = '', $commission = '', $integral = '', $type = '', $partner = '')
    {
        if(yanzen($token)!=null) return yanzen();
        $data = ['id' => '', 'barcode' => $barcode, 'name' => $name, 'price' => $price, 'member' => $member, 'commission' => $commission, 'integral' => $integral, 'type' => $type, 'purchase' => $purchase, 'partner' => $partner];
        Db::name('merchandiseordinary')->insert($data);
        echo result();
    }

    public function ordinary_u($token = '',$id = '', $barcode = '', $name = '', $price = '', $purchase = '', $member = '', $commission = '', $integral = '', $type = '', $partner = '')
    {
//        if(yanzen($token)!=null) return yanzen();
        $data = ['id' => $id, 'barcode' => $barcode, 'name' => $name, 'price' => $price, 'member' => $member, 'commission' => $commission, 'integral' => $integral, 'type' => $type, 'purchase' => $purchase, 'partner' => $partner];
        Db::name('merchandiseordinary')->save($data);
        echo result();
    }

    public function member_s($token = '',$limit = '10',$page = '1')

    {
        if(yanzen($token)!=null) return yanzen();
        $size = ($page - 1) * $limit;

        $count = count(Db::name('merchandisemember')->select());
        $result = Db::name('merchandisemember')->limit($size,$limit)->select();
        echo result($result,$count);
    }

    public function member_i($token = '',$id = '', $barcode = '', $name = '', $price = '', $purchase = '', $commission = '', $grade = '', $integral = '', $type = '')

    {
        if(yanzen($token)!=null) return yanzen();

        $date = date('Y-m-d H:i:s');
        $data = ['barcode' => $barcode, 'name' => $name, 'price' => $price, 'purchase' => $purchase, 'commission' => $commission, 'grade' => $grade, 'integral' => $integral, 'type' => $type];
        Db::name('merchandisemember')->insert($data);
        echo result();
    }

    public function member_u($token = '',$id = '', $barcode = '', $name = '', $price = '', $purchase = '', $commission = '', $grade = '', $integral = '', $type = '')

    {
//        if(yanzen($token)!=null) return yanzen();
        $data = ['id' => $id, 'barcode' => $barcode, 'name' => $name, 'price' => $price, 'purchase' => $purchase, 'commission' => $commission, 'grade' => $grade, 'integral' => $integral, 'type' => $type];
        Db::name('merchandisemember')->save($data);
        echo result();
    }

}