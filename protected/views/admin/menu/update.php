<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List Menu', 'url'=>array('index')),
//	array('label'=>'Create Menu', 'url'=>array('create')),
//	array('label'=>'View Menu', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage Menu', 'url'=>array('admin')),
//);
?>

<h1><?php echo str_replace("###TITLE###", 'Menu', Constants::$listTitleForm['form_update']) .' ' . $model->id; ?></h1>

 <div class="create_user">
  <?php echo $this->renderPartial('_form', array('model'=>$model, 'list_menu_type' => $list_menu_type)); ?>
 </div>
