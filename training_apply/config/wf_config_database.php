<?php if ( ! defined('IN_WILDFIRE') ) die('The blaze was put out.');
/**
 * Created by JetBrains PhpStorm.
 * User: WYG
 * Date: 21/05/13
 * Time: 10:59 PM
 * To change this template use File | Settings | File Templates.
 */
//数据库配置
define('WF_REMOTE_DATABASE', true); //设置这里来决定使用“远程”或“本地”哪一个数据库服务器

if (WF_REMOTE_DATABASE) {
    //远程
    $WF_CONFIG['db_host'] = 'mahjongsite.mysql.database.azure.com';
    $WF_CONFIG['db_user'] = 'max@mahjongsite';
    $WF_CONFIG['db_pass'] = '400@University';
    $WF_CONFIG['db_name'] = 'mahjong_baoming';
} else {
    //本地
    $WF_CONFIG['db_host'] = 'mahjongsite.mysql.database.azure.com';
    $WF_CONFIG['db_user'] = 'root';
    $WF_CONFIG['db_pass'] = '123456';
    $WF_CONFIG['db_name'] = 'majiang_baoming';
}