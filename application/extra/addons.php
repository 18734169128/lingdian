<?php

return array (
  'autoload' => false,
  'hooks' => 
  array (
    'app_init' => 
    array (
      0 => 'cms',
      1 => 'epay',
    ),
    'response_send' => 
    array (
      0 => 'cms',
      1 => 'loginbgindex',
      2 => 'loginvideo',
    ),
    'user_sidenav_after' => 
    array (
      0 => 'cms',
      1 => 'invite',
      2 => 'recharge',
      3 => 'signin',
      4 => 'withdraw',
    ),
    'express_query' => 
    array (
      0 => 'express',
    ),
    'ems_send' => 
    array (
      0 => 'faems',
    ),
    'ems_notice' => 
    array (
      0 => 'faems',
    ),
    'action_begin' => 
    array (
      0 => 'geetest',
    ),
    'config_init' => 
    array (
      0 => 'geetest',
      1 => 'qcloudsms',
    ),
    'user_register_successed' => 
    array (
      0 => 'invite',
    ),
    'leesignhook' => 
    array (
      0 => 'leesign',
    ),
    'admin_login_init' => 
    array (
      0 => 'loginbg',
    ),
    'index_login_init' => 
    array (
      0 => 'loginbgindex',
    ),
    'testhook' => 
    array (
      0 => 'markdown',
    ),
    'prismhook' => 
    array (
      0 => 'prism',
    ),
    'sms_send' => 
    array (
      0 => 'qcloudsms',
      1 => 'smsbao',
    ),
    'sms_notice' => 
    array (
      0 => 'qcloudsms',
      1 => 'smsbao',
    ),
    'sms_check' => 
    array (
      0 => 'qcloudsms',
      1 => 'smsbao',
    ),
    'upload_after' => 
    array (
      0 => 'thumb',
    ),
    'wipecache_after' => 
    array (
      0 => 'tinymce',
    ),
    'set_tinymce' => 
    array (
      0 => 'tinymce',
    ),
  ),
  'route' => 
  array (
    '/cms/$' => 'cms/index/index',
    '/cms/a/[:diyname]' => 'cms/archives/index',
    '/cms/t/[:name]' => 'cms/tags/index',
    '/cms/p/[:diyname]' => 'cms/page/index',
    '/cms/s' => 'cms/search/index',
    '/cms/c/[:diyname]' => 'cms/channel/index',
    '/cms/d/[:diyname]' => 'cms/diyform/index',
    '/cms/special/[:diyname]' => 'cms/special/index',
    '/example$' => 'example/index/index',
    '/example/d/[:name]' => 'example/demo/index',
    '/example/d1/[:name]' => 'example/demo/demo1',
    '/example/d2/[:name]' => 'example/demo/demo2',
    '/invite/[:id]$' => 'invite/index/index',
    '/leesign$' => 'leesign/index/index',
    '/qrcode$' => 'qrcode/index/index',
    '/qrcode/build$' => 'qrcode/index/build',
    '/third$' => 'third/index/index',
    '/third/connect/[:platform]' => 'third/index/connect',
    '/third/callback/[:platform]' => 'third/index/callback',
  ),
);