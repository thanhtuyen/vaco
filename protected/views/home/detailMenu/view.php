<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */

$this->breadcrumbs=array(
	'Detail Menus'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List detailmenu', 'url'=>array('index')),
	array('label'=>'Create detailmenu', 'url'=>array('create')),
	array('label'=>'Update detailmenu', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete detailmenu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage detailmenu', 'url'=>array('admin')),
);
?>

<h1>View detailMenu #<?php echo $model->id; ?></h1>
<?php echo Yii::app()->language;?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'menu_id',
		'title',
		'caption',
		'detail',
		'title_eng',
		'caption_eng',
		'detail_eng',
		'image_path',
		'list_file_attach',
		'create_date',
		'create_user',
		'update_date',
		'del_flg',
		'feature_flg',
	),
)); ?>
