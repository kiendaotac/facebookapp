<?php
/**
 * Created by Hoàng Kiên.
 * User: hoangkien151092@gmail.com
 * Date: 6/25/2018
 * Time: 10:25 AM
 */

return [
    'app_name'          =>  'Facebook App',
    'noavatar'          =>  'img/noavatar.png',
    'admin_subdomain'   =>  'admin.facebook.porn',
    'domain'            =>  'facebook.porn',
    'node_port'         =>  env('SERVER_NODEJS_PORT'),
    'database'          =>  env('DB_DATABASE'),
    'timeout'           =>  10000,
    'mail_admin'        => env('MAIL_ANDMIN')
];
