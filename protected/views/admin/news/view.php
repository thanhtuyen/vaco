<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
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
<?php //var_dump($model->menu);exit; ?>
<div class="view_user">
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name' => 'menu_id',
      		'value' => CHtml::decode($model->menu->menu_name)
		),
		array('name' => 'title',
      		'value' => CHtml::decode($model->title)
		),
		array('name' => 'caption',
      		'value' => CHtml::decode($model->caption)
		),
		array('name' => 'detail',
      		'value' => CHtml::decode($model->detail)
		),
		array('name' => 'title_eng',
      		'value' => CHtml::decode($model->title_eng)
		),
		array('name' => 'caption_eng',
      		'value' => CHtml::decode($model->caption_eng)
		),
		array('name' => 'detail_eng',
      		'value' => CHtml::decode($model->detail_eng)
		),
		'thumb_image_path',
		'listfile_attach',
		'create_user_id',
		'create_date',
		'feature_flag',
		'update_date',
		'is_public',
	),
)); ?>
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$modelKeyword,
	'attributes'=>array(
		'keyword',
		'keyword_eng',
	),
)); ?>
</div>
