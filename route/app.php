<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get('think', function () {
    return 'hello,ThinkPHP6!';
});

//Route::get('username', 'api.Login/username');
//Route::get('menu', 'api.Login/menu');
//Route::get('userinfo', 'api.Login/userinfo');
//Route::get('login', 'api.Login/login');
//Route::get('useradminuserlist_s', 'api.Useradmin/userlist_s');
//Route::get('useradminuserlist_i', 'api.Useradmin/userlist_i');
//Route::get('useradminuserlist_u', 'api.Useradmin/userlist_u');
//Route::get('useradminmember_s', 'api.Useradmin/member_s');
//Route::get('useradminmember_i', 'api.Useradmin/member_i');
//Route::get('useradminmember_u', 'api.Useradmin/member_u');
//Route::get('merchandisegame_s', 'api.Merchandise/game_s');
//Route::get('merchandisegame_i', 'api.Merchandise/game_i');
//Route::get('merchandisegame_u', 'api.Merchandise/game_u');
//Route::get('merchandiseordinary_s', 'api.Merchandise/ordinary_s');
//Route::get('merchandiseordinary_i', 'api.Merchandise/ordinary_i');
//Route::get('merchandiseordinary_u', 'api.Merchandise/ordinary_u');
//Route::get('merchandisemember_s', 'api.Merchandise/member_s');
//Route::get('merchandisemember_i', 'api.Merchandise/member_i');
//Route::get('merchandisemember_u', 'api.Merchandise/member_u');
//Route::get('ordertmp_s', 'api.Sales/ordertmp_s');
//Route::get('ordertmp_u', 'api.Sales/ordertmp_u');
//Route::get('ordertmp_i', 'api.Sales/ordertmp_i');
//Route::get('member', 'api.Sales/member');
//Route::get('game', 'api.Sales/game');

//Route::get('pointslist_s', 'api.Orderform/pointslist_s');
//Route::get('pointslist_i', 'api.Orderform/pointslist_i');
//Route::get('pointslist_u', 'api.Orderform/pointslist_u');
//Route::get('scenelist_s', 'api.Orderform/scenelist_s');
//Route::get('scenelist_i', 'api.Orderform/scenelist_i');
//Route::get('scenelist_u', 'api.Orderform/scenelist_u');



//Route::get('orders', 'api.Pay/orders');




Route::get('username', 'api.Login/username');
Route::get('menu', 'api.Login/menu');
Route::get('userinfo', 'api.Login/userinfo');
Route::get('login', 'api.Login/login');
Route::get('useradminuserlist_s', 'api.Useradmin/userlist_s');
Route::get('useradminuserlist_i', 'api.Useradmin/userlist_i');
Route::get('useradminuserlist_u', 'api.Useradmin/userlist_u');
Route::get('useradminmember_s', 'api.Useradmin/member_s');
Route::get('useradminmember_i', 'api.Useradmin/member_i');
Route::get('useradminmember_u', 'api.Useradmin/member_u');
Route::get('merchandisegame_s', 'api.Merchandise/game_s');
Route::get('merchandisegame_i', 'api.Merchandise/game_i');
Route::get('merchandisegame_u', 'api.Merchandise/game_u');
Route::get('merchandiseordinary_s', 'api.Merchandise/ordinary_s');
Route::get('merchandiseordinary_i', 'api.Merchandise/ordinary_i');
Route::get('merchandiseordinary_u', 'api.Merchandise/ordinary_u');
Route::get('merchandisemember_s', 'api.Merchandise/member_s');
Route::get('merchandisemember_i', 'api.Merchandise/member_i');
Route::get('merchandisemember_u', 'api.Merchandise/member_u');
Route::get('ordertmp_s', 'api.Sales/ordertmp_s');
Route::get('ordertmp_u', 'api.Sales/ordertmp_u');
Route::get('ordertmp_i', 'api.Sales/ordertmp_i');
Route::get('member', 'api.Sales/member');
Route::get('game', 'api.Sales/game');

Route::get('pointslist_s', 'api.Orderform/pointslist_s');
Route::get('pointslist_i', 'api.Orderform/pointslist_i');
Route::get('pointslist_u', 'api.Orderform/pointslist_u');
Route::get('scenelist_s', 'api.Orderform/scenelist_s');
Route::get('scenelist_i', 'api.Orderform/scenelist_i');
Route::get('scenelist_u', 'api.Orderform/scenelist_u');

Route::get('orders', 'api.Pay/orders');

Route::get('ordersinfo', 'api.Pay/ordersinfo');
//Route::get('orders', 'api.Pay/orders');



//Route::get('/sheep/v1/game/map_info_new', 'api.Test/Test');
//Route::get('/sheep/v1/game/game_over', 'api.Test/Test');