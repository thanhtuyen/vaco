<?php
/* @var $this DetailmenuimageController */
/* @var $model Detailmenuimage */

$this->breadcrumbs=array(
	'Detailmenuimages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Detailmenuimage', 'url'=>array('index')),
	array('label'=>'Create Detailmenuimage', 'url'=>array('create')),
	array('label'=>'Update Detailmenuimage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Detailmenuimage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Detailmenuimage', 'url'=>array('admin')),
);
?>

<h1>View Detailmenuimage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'menu_id',
		'caption',
		'caption_eng',
		'create_date',
		'create_user',
		'update_date',
		'del_flg',
		'public_flg',
		'feature_flg',
	),
)); ?>
