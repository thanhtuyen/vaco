<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('admin'),
	$model->userid=>array('view','id'=>$model->userid),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List User', 'url'=>array('index')),
//	array('label'=>'Create User', 'url'=>array('create')),
//	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->userid)),
//	array('label'=>'Manage User', 'url'=>array('admin')),
//);
?>

<h1><?php echo str_replace("###TITLE###", 'User', Constants::$listTitleForm['form_update']) .' ' . $model->userid; ?></h1>

 <div class="create_user">
  <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
 </div>
