<?php
/* @var $this DetailmenuimageController */
/* @var $model Detailmenuimage */

$this->breadcrumbs=array(
	'Detailmenuimages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Detailmenuimage', 'url'=>array('index')),
	array('label'=>'Create Detailmenuimage', 'url'=>array('create')),
	array('label'=>'View Detailmenuimage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Detailmenuimage', 'url'=>array('admin')),
);
?>

<h1>Update Detailmenuimage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>