<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Menu', 'url'=>array('index')),
	//array('label'=>'Manage Menu', 'url'=>array('admin')),
);
?>

<h1><?php echo str_replace("###TITLE###", 'Menu', Constants::$listTitleForm['form_create']); ?></h1>

 <div class="create_user">
  <?php echo $this->renderPartial('_form', array('model'=>$model, 'list_menu_type' => $list_menu_type)); ?>
 </div>
