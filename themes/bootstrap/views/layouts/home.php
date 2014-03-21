<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common.css" />
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

<title><?php echo CHtml::encode($this->pageTitle); ?></title>

<?php Yii::app()->bootstrap->register(); ?>
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
<style type="text/css">
textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"],
input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"],
input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"],
.uneditable-input {
border: 0px;
box-shadow: 0;
}
#page {
padding-top:0;
}
</style>

</head>

<body>
<div class="container" id="page">
<div class="logo">
<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/front/logo.png" alt="logovaco"></a>
</div>
<div class="langsear">
<div id="language-selector" >
<?php
$this->widget('application.components.widgets.LanguageSelector');
?>
</div>
<!-- --><?php
// $url =Yii::app()->request->requestUri;
// $controller = Yii::app()->controller->id ;
// $action = Yii::app()->controller->action->id;?>
<!--	<div class="language">-->
<!--	<div class="english">Â Â |Â  --><?php //echo CHtml::link('Enghlish', array('..'.$url.'?_lang=en'));?><!--</div>-->
<!--	<div class="vietnam actlang">--><?php //echo CHtml::link('Tiếng Việt', array('..'.$url.'?_lang=vi'));?><!--</div>-->
<!--	</div>-->

<div class="t_search">
<div class="sear_input"><input name="" type="text" value="Tìm Kiếm"></div>
<div class="btn_search"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/front/btn_search.png" alt="logovaco"></a></div>
</div>
</div>

<!-- BEGIN MAIN MENU -->
<nav id="t3-mainnav" class="wrap t3-mainnav ">
<div class="navbar container">
<div class="nav-collapse collapse">
<div class="t3-megamenu">
<ul class="nav">
<?php
$parent_menu = Menu::getListParentMenuSortPriority(0);
foreach ($parent_menu as $pm){
$sub_menu = Menu::getListParentMenuSortPriority($pm->id);
if($sub_menu != array()){ ?>
<li class="dropdown">
<a href="#"><?php echo $pm->menu_name; ?></a>
<div class="nav-child dropdown-menu">
<ul class="mega-nav">
<?php foreach ($sub_menu as $sm) : ?>
<li><a href="#"><?php echo $sm->menu_name; ?></a></li>
<?php endforeach; ?>
</ul>
</div>
</li>
<?php } else { ?>
<li><a href="../../home"><?php echo $pm->menu_name; ?></a></li>
<?php }
}
?>
</ul>
</div>
</div>
</div>
</nav>
<!-- END MAIN MENU -->
</div><!-- page -->


<!-- breadcrumbs -->
<!--<?php if(isset($this->breadcrumbs)):?>
    <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
'links'=>$this->breadcrumbs,
)); ?>
<?php endif?>-->

<?php echo $content; ?>

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