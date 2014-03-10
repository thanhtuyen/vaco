<?php
/* @var $this DetailmenuimageController */
/* @var $model Detailmenuimage */

$this->breadcrumbs=array(
	'Detailmenuimages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Detailmenuimage', 'url'=>array('index')),
	array('label'=>'Manage Detailmenuimage', 'url'=>array('admin')),
);
?>

<h1>Create Detailmenuimage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>