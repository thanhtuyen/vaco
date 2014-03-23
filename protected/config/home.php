<?php
return CMap::mergeArray(
  require(dirname(__FILE__) . '/main.php'),
  array(
    // Put front-end settings there
    // (for example, url rules).
   // 'name' => 'vaco.vn',
    'sourceLanguage'=>'vi',
    //'defaultController' => 'memu/index',
    //'language' => 'en',
    'components' => array(
      // uncomment the following to enable URLs in path-format
      'urlManager'=>array(
        'class'=>'application.components.UrlManager',
        'urlFormat'=>'path',
        'showScriptName'=>false,
        'caseSensitive'=>false,
        'rules'=>array(

          '<language:(vi|en)>/blog/' => 'detailMenu/admin',
          '<language:(vi|en)>/' => 'site/index',
          '<language:(vi|en)>/tintuc'=>'news/list',
          '<language:(vi|en)>/<action:(contact|login|logout)>/*' => 'site/<action>',
          '<language:(vi|en)>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<language:(vi|en)>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<language:(vi|en)>/<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',


        ),
      ),
    ),
    'params'=>array(
      'languages'=>array('en'=>'English', 'vi' => "Việt Nam"),
    ),
  )
);
?>