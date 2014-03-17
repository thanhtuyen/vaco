<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List User', 'url'=>array('index')),
	//array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1><?php echo str_replace("###TITLE###", 'User', Constants::$listTitleForm['form_create']); ?></h1>

 <div class="create_user">
  <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
 </div>
