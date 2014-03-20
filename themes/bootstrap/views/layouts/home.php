<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common.css" />

  <title><?php echo CHtml::encode($this->pageTitle); ?></title>

  <?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar', array(
  'type'=>'inverse', // null or 'inverse'
 // 'brand'=>'Project name',
  'brandUrl'=>'#',
  'collapse'=>true, // requires bootstrap-responsive.css
  'items'=>array(
    array(
      'class'=>'bootstrap.widgets.TbMenu',
      'items'=>array(
        array('label'=>'Home', 'url'=>'', 'active'=>true),
        array('label'=>'menu', 'url'=>array('/menu/admin')),
        array('label'=>'detailmenu', 'url'=>array('/detailMenu/admin')),
        array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
          array('label'=>'Action', 'url'=>'#'),
          array('label'=>'Another action', 'url'=>'#'),
          array('label'=>'Something else here', 'url'=>'#'),
          '---',
          array('label'=>'NAV HEADER'),
          array('label'=>'Separated link', 'url'=>'#'),
          array('label'=>'One more separated link', 'url'=>'#'),
        )),
      ),
    ),
    '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
    array(
      'class'=>'bootstrap.widgets.TbMenu',
      'htmlOptions'=>array('class'=>'pull-right'),
      'items'=>array(
        array('label'=>'Link', 'url'=>'#'),
        array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
          array('label'=>'Action', 'url'=>'#'),
          array('label'=>'Another action', 'url'=>'#'),
          array('label'=>'Something else here', 'url'=>'#'),
          '---',
          array('label'=>'Separated link', 'url'=>'#'),
        )),
      ),
    ),
  ),
)); ?>

<div class="container" id="page">
  <div id="language-selector" style="float:right; margin:5px;">
    <?php
    $this->widget('application.components.widgets.LanguageSelector');
    ?>
  </div>
  <div>

  </div>
  <?php if(isset($this->breadcrumbs)):?>
    <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
  <?php endif?>

  <?php echo $content; ?>

  <div class="clear"></div>

  <div id="footer">
    Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
    All Rights Reserved.<br/>
    <?php echo Yii::powered(); ?>
  </div><!-- footer -->

</div><!-- page -->

</body>
</html>
<style>
  #vi{
    padding-right: 10px;
  }
</style>