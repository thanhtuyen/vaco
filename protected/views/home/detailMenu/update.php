<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */

$this->breadcrumbs=array(
	'Detail Menus'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List detailmenu', 'url'=>array('index')),
	array('label'=>'Create detailmenu', 'url'=>array('create')),
	array('label'=>'View detailmenu', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage detailmenu', 'url'=>array('admin')),
);
?>

<h1>Update detailMenu <?php echo $model->id; ?></h1>
<?php echo Yii::app()->language;?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>