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
        'showScriptName'=>false, // hiden index.php
        'caseSensitive'=>false,
        'rules'=>array(
          '<language:(vi|en)>/' => 'site/index',
          '<language:(vi|en)>/lien-he' => 'site/contact',
          /*'<language:(vi|en)>/<id:\d+>/<title:.*?>' => array('Detailmenu/list', 'urlSuffix' => '/', 'caseSensitive' => false),*/
          '<language:(vi|en)>/<id:\d+>/<name:.*?>' => array('News/list', 'urlSuffix' => '/', 'caseSensitive' => false),
          '<language:(vi|en)>/<id:\d+>/<nameimage:.*?>' => array('Detailmenuimage/list', 'urlSuffix' => '/', 'caseSensitive' => false),
          '<language:(vi|en)>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<language:(vi|en)>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<language:(vi|en)>/<controller:\w+>/<action:\w+>'=>'<controller>/<action>',


          /*'<language:(vi|en)>/<id:\d+>/<name:.*?>' => array('News/list', 'urlSuffix' => '/', 'caseSensitive' => false),
          '<language:(vi|en)>/<id:\d+>/<nameimage:.*?>' => array('Detailmenuimage/list', 'urlSuffix' => '/', 'caseSensitive' => false),
          //'<language:(vi|en)>/blog/' => 'detailMenu/admin',
          '<language:(vi|en)>/' => 'site/index',
//          '<language:(vi|en)>/tintuc'=>'news/list',
//          '<language:(vi|en)>/chitiet'=>'news/view',
//          '<language:(vi|en)>/search'=>'search/index',
//          '<language:(vi|en)>/tintucchitiet'=>'detailmenu/list',
          '<language:(vi|en)>/<action:(contact|login|logout)>/*' => 'site/<action>',
          '<language:(vi|en)>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<language:(vi|en)>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<language:(vi|en)>/<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',

          //'model/<id:\d+>-<name>.html'=>'model/view', // e.g. model/1-model+name.html*/
        ),
      ),
    ),
    'params'=>array(
      'languages'=>array('en'=>'English', 'vi' => "Việt Nam"),
    ),
  )
);
?>