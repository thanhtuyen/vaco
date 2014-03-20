<?php
return CMap::mergeArray(
  require(dirname(__FILE__) . '/main.php'),
  array(
    // preloading 'log' component
    'preload'=>array('log, bootstrap, ckeditor'),
//  Aplly Theme
    'theme'=>'bootstrap',
    'defaultController' => 'user/admin',
    'name'     => '',
    'language' => 'vi',
    'components' => array(
      'urlManager'=>array(
        'urlFormat'=>'path',
        'rules'=>array(
          '<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
        ),
      ),
    ),
  )
);
?>