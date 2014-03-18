<?php
return CMap::mergeArray(
  require(dirname(__FILE__) . '/main.php'),
  array(
    // Put front-end settings there
    // (for example, url rules).
   // 'name'       => 'vaco.vn',
    'defaultController' => 'memu/admin',
    //'language' => 'vi',
    'components' => array(
      // uncomment the following to enable URLs in path-format
      'urlManager' => array(
        'urlFormat' => 'path',
        'rules'     => array(
          '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
          '<lang:\w+>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<lang:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<lang:\w+>/<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
        ),
      ),
    ),
  )
);
?>