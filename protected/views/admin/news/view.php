<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('admin'),
	$model->title,
);

$this->menu=array(
	//array('label'=>'List News', 'url'=>array('index')),
	//array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'Update News', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete News', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<h1><?php echo str_replace("###TITLE###", 'Tin Tức', Constants::$listTitleForm['form_view']) .' ' . $model->id; ?></h1>

<div class="view_user">
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
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
		'thumb_image_path',
		'listfile_attach',
		'create_user_id',
		'create_date',
		'feature_flag',
		'update_date',
		'is_public',
		'del_flg',
	),
)); ?>
</div>
