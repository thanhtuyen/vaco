<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */

$this->breadcrumbs=array(
	'Detail Menus'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List detailmenu', 'url'=>array('index')),
	//array('label'=>'Manage detailmenu', 'url'=>array('admin')),
);
?>

<h1><?php echo str_replace("###TITLE###", 'Chi Tiết Menu', Constants::$listTitleForm['form_create']); ?></h1>

<!-- <div class="create_user"> -->
  <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<!-- </div> -->
