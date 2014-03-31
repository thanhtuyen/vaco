<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <?php
  $id = '';
  if (isset($_GET['id']))
    $id = $_GET['id'];

  /*$menu_info = Menu::model()->getMenuInfoId($id);
  if($menu_info != '')
    $menu_caption = (Yii::app()->language == "en") ? $menu_info->caption_eng : $menu_info->caption;
  else
    $menu_caption = " ";*/

  $key_info = Keyword::model()->findByPk($id);
  if($key_info != '')
    $key_word = (Yii::app()->language == "en") ? $key_info->keyword_eng : $key_info->keyword;
  else
    $key_word = " ";

  Yii::app()->controller->widget('ext.seo.widgets.SeoHead',array(
    'httpEquivs'=>array(
      'Content-Type'=>'text/html; charset=utf-8',
      'Content-Language'=>'en-US'
    ),
    //'defaultDescription'=>$menu_caption,
    'defaultKeywords'=>$key_word,
  ));
  ?>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>

  <!--<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

  <link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/common.css" />-->

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/template.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/template-ie.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jstyle.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/home.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/gioithieu.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tintuc.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dichvu.css" />


  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/mootools-core.js" type="text/javascript"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery_002.js" type="text/javascript"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/menu.js" type="text/javascript"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script_002.js" type="text/javascript"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jscript.js" type="text/javascript"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js" type="text/javascript"></script>

  <?php //Yii::app()->bootstrap->register(); ?>

  <!-- META FOR IOS & HANDHELD -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="YES">
  <!-- //META FOR IOS & HANDHELD -->
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- For IE6-8 support of media query -->
  <!--[if lt IE 9]>
  <script type="text/javascript" src="js/respond.min.js"></script>
  <![endif]-->
  <!-- You can add Google Analytics here-->

  <!--[if IE 8]>
  <style type="text/css">
    .container
    {
      width:1188px;
    }
  </style>
  <![endif]--> 

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-29040179-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>

</head>

<body>
<div class="container" id="page">
  <div class="logo">
    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/front/logo.png" alt="logovaco"></a>
  </div>
  <div class="langsear">
    <div  id="language-selector" >
      <?php
      $this->widget('application.components.widgets.LanguageSelector');
      ?>
    </div>

    <div class="t_search">
      <!--      <form class="srchbox" method="get" action="/--><?php //echo Yii::app()->language;?><!--/news/search">-->
      <!--        <div class="sear_input"><input class="pattn" type="text" onfocus="RepTxt(this);" value="Nhập nội dung tìm kiếm" name="q"></div>-->
      <!--        <div class="btn_search"><img src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/images/front/btn_search.png" alt="logovaco"></div>-->
      <!--      </form>-->
      <form id="search-form_013837943323146086010:ppcggvatkxe" action="<?php echo Yii::app()->urlManager->createUrl('/search/index');?>">
        <input value="013837943323146086010:ppcggvatkxe" name="cx" type="hidden"/>
        <input value="FORID:11" name="cof" type="hidden"/>
        <!--        <div class="sear_input"><input id="q" name="" type="text" value="Tìm Kiếm"></div>-->
        <!--        <div class="btn_search"><a href="--><?php //echo Yii::app()->urlManager->createUrl('/search/index'); ?><!--"><img src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/images/front/btn_search.png" alt="logovaco"></a></div>-->
        <div class="sear_input"><input id="q" style="width:150px;" name="q" size="70" type="text" /></div>
        <div class="btn_search"><input  name="sa" type="image" src='<?php echo Yii::app()->request->baseUrl; ?>/images/front/btn_search.png' alt='logovaco' /> </div>
      </form>

    </div>
  </div>

  <!-- BEGIN MAIN MENU -->
  <nav id="t3-mainnav" class="wrap t3-mainnav ">
    <div class="navbar container">
      <div class="nav-collapse collapse">
        <div class="t3-megamenu">
          <ul class="nav">
            <?php
            $array_parent_id = array();
            $array_sub_id = array();
            $parent_menu = HomeController::getListParentMenuSortPriority(0);
            foreach ($parent_menu as $pm){
              $array_parent_id[] = $pm->id;
              $sub_menu = HomeController::getListParentMenuSortPriority($pm->id);
              if($sub_menu != array()){
                echo '<li class="dropdown" id="'.$pm->id.'">';

                if(Yii::app()->language == "en")
                  echo '<a href="#">'.$pm->menu_name_eng.'</a>';
                else
                  echo '<a href="#">'.$pm->menu_name.'</a>';

                echo '<div class="nav-child dropdown-menu">';
                echo '<ul class="mega-nav">';
                foreach ($sub_menu as $sm){
                  $array_sub_id[] = $sm->id;
                  $type_sub_menu = Menu::getTypeMenu($sm->id);
                  //$model = Menu::model()->findByPK($sm->id);
                  if($type_sub_menu == Menu::NOT_LIST) {
                    echo '<li>' . CHtml::link((Yii::app()->language == "en") ? $sm->menu_name_eng : $sm->menu_name, HomeController::getUrlDetail('Detailmenu/view', $sm->id, (Yii::app()->language == "en") ? $sm->menu_name_eng : $sm->menu_name)) . '</li>';
                  } else if($type_sub_menu == Menu::TYPE_IMAGE) {
                    echo '<li>' . CHtml::link((Yii::app()->language == "en") ? $sm->menu_name_eng : $sm->menu_name, HomeController::getUrlMenuImage('Detailmenuimage/list', $sm->id, (Yii::app()->language == "en") ? $sm->menu_name_eng : $sm->menu_name)) . '</li>';
                  }	else if($type_sub_menu == Menu::LIST_MENU) {
                    echo '<li>' . CHtml::link((Yii::app()->language == "en") ? $sm->menu_name_eng : $sm->menu_name, HomeController::getUrlNews('News/list', $sm->id, (Yii::app()->language == "en") ? $sm->menu_name_eng : $sm->menu_name)) . '</li>';
                  } 
                }
                echo '</ul>';
                echo '</div>';
                echo '</li>';
              } else {
                //$model = Menu::model()->findByPK($pm->id);
                $type_menu = Menu::getTypeMenu($pm->id);
                if($pm->priority == '1' && $type_menu == Menu::NOT_LIST) // home page
                	echo '<li id="home_page">'.CHtml::link((Yii::app()->language == "en") ? $pm->menu_name_eng : $pm->menu_name, Yii::app()->urlManager->createUrl('/site/index')).'</li>';
                else if($pm->priority == '4' && $type_menu == Menu::NOT_LIST) // contract
                	echo '<li id="'.$pm->id.'">'.CHtml::link((Yii::app()->language == "en") ? $pm->menu_name_eng : $pm->menu_name, Yii::app()->urlManager->createUrl('/site/contact')).'</li>';
                else {
                  if ($type_menu == Menu::NOT_LIST)
                    echo '<li id="'.$pm->id.'">' . CHtml::link((Yii::app()->language == "en") ? $pm->menu_name_eng : $pm->menu_name, HomeController::getUrlDetail('Detailmenu/view', $pm->id, (Yii::app()->language == "en") ? $pm->menu_name_eng : $pm->menu_name)) . '</li>';
                  else if ($type_menu == Menu::TYPE_IMAGE)
                    echo '<li id="'.$pm->id.'">' . CHtml::link((Yii::app()->language == "en") ? $pm->menu_name_eng : $pm->menu_name, HomeController::getUrlMenuImage('Detailmenuimage/list', $pm->id, (Yii::app()->language == "en") ? $pm->menu_name_eng : $pm->menu_name)) . '</li>';
                  else if($type_menu == Menu::LIST_MENU)
                    echo '<li id="'.$pm->id.'">' . CHtml::link((Yii::app()->language == "en") ? $pm->menu_name_eng : $pm->menu_name, HomeController::getUrlNews('News/list', $pm->id, (Yii::app()->language == "en") ? $pm->menu_name_eng : $pm->menu_name)) . '</li>';
                }
              }
            }

            // active menu
            if(in_array($id, $array_parent_id) || in_array($id, $array_sub_id)){
              $parent_current_id = Menu::model()->getMenuInfoId($id)->parent_menu_id;
            if($parent_current_id == 0){
              ?>
              <script type="text/javascript">
                $( document ).ready(function() {
                	$('#'+<?php echo $id;?>).addClass('active');
                });
              </script>
            <?php
            } else {
            ?>
              <script type="text/javascript">
                $( document ).ready(function() {
                	$('#'+<?php echo $id;?>).addClass('lm_active');
                	$('#'+<?php echo $parent_current_id;?>).addClass('active');
                });
              </script>
            <?php
            	}
            } else {
            ?>
              <script type="text/javascript">
              	$(document).ready(function(){ 
              		$('#home_page').addClass("active");
                });
              </script>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- END MAIN MENU  -->
</div><!-- page -->

<!-- BEGIN BREAK -->
<?php if($this->breadcrumbs != array()):?>
  <div class="container">
    <!-- BEGIN BREAK -->
    <div class="container">
      <div class="bg_break">
        <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
          'links'=>$this->breadcrumbs,
        )); ?>
      </div>
    </div>
  </div>
<?php endif?>
<!-- END BREAK -->
<div class="container">
  <!-- BEGIN LEFT MENU -->
  <?php
  if($id != ''):
    require 'menu_left.php' ;
  endif;
  ?>
  <!-- END LEFT MENU -->

  <?php echo $content; ?>
</div>
<div class="clear"></div>

<!-- BEGIN FOOTER -->
<div class="container">
  <div class="footer">
    <div class="copyyright">&copy; <?php echo date('Y'); ?> Bản quyền thuộc về Công ty TNHH Kiểm Toán VACO</div>
    <div class="mxh">
      <div class="facebook"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/front/facebook.png"></a></div>
      <div class="tew"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/front/tew.png"></a></div>
      <div class="you"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/front/you.png"></a></div>
      <div class="top"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/front/top.png"></a></div>
    </div>
  </div>
</div>
<!-- END FOOTER -->

</body>
</html>

