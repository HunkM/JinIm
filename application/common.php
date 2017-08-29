<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

function redis_connect(){
    $redis  = new Redis();
    $redis->connect('127.0.0.1','6379');
    return $redis;
}

function set_result($msg,$data,$code){
    $result['code'] = $code;
    $result['msg'] = $msg;
    $result['data'] = $data;
    return $result;
}
