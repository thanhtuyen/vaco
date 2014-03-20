<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */

$this->breadcrumbs=array(
	'Detail Menus'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List detailMenu', 'url'=>array('index')),
	array('label'=>'Create detailMenu', 'url'=>array('create')),
	array('label'=>'View detailMenu', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage detailMenu', 'url'=>array('admin')),
);
?>

<h1>Update detailMenu <?php echo $model->id; ?></h1>
<?php echo Yii::app()->language;?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>