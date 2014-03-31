<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */

$this->breadcrumbs=array(
	'Detail Menus'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List detailmenu', 'url'=>array('index')),
	//array('label'=>'Create detailmenu', 'url'=>array('create')),
	//array('label'=>'View detailmenu', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage detailmenu', 'url'=>array('admin')),
);
?>

<h1><?php echo str_replace("###TITLE###", 'Chi Tiết Menu', Constants::$listTitleForm['form_update']) .' ' . $model->id; ?></h1>

<!-- <div class="create_user"> -->
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<!-- </div> -->