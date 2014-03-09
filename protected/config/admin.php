<?php
return CMap::mergeArray(
  require(dirname(__FILE__) . '/main.php'),
  array(
    'defaultController' => 'user/admin',
    'name'     => 'Management website',
    'language' => 'vi',
    'components' => array(
      'urlManager'=>array(
        'urlFormat'=>'path',
        'rules'=>array(
          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
        ),
      ),
    ),
  )
);
?>