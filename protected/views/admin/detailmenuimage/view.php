<?php
/* @var $this DetailmenuimageController */
/* @var $model Detailmenuimage */

$this->breadcrumbs=array(
	'Detailmenuimages'=>array('index'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'List Detailmenuimage', 'url'=>array('index')),
	//array('label'=>'Create Detailmenuimage', 'url'=>array('create')),
	//array('label'=>'Update Detailmenuimage', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Detailmenuimage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Detailmenuimage', 'url'=>array('admin')),
);
?>

<h1><?php echo str_replace("###TITLE###", 'Menu Hình Ảnh', Constants::$listTitleForm['form_view']) .' ' . $model->id; ?></h1>

<div class="view_user">
	<div style="text-align:right"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/thumbnails/bedit.png',"bCreate",array("class"=>"icon_edit")), Yii::app()->createUrl('/detailmenuimage/update/'.$model->id)) ;?></div>
	<?php 
	$user = User::model()->findByPk($model->create_user);
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			array('name' => 'menu_id',
				'type' => 'raw',
	      		'value' => CHtml::encode($model->menu->menu_name)
			),
			array('name' => 'caption',
				'type' => 'raw',
	      		'value' => CHtml::encode($model->caption)
			),
			array('name' => 'caption_eng',
				'type' => 'raw',
	      		'value' => CHtml::encode($model->caption_eng)
			),
			array('name' => 'image_path',
	      		'value' => $model->image_path ? $model->image_path : ''
			),
			array('name' => 'create_user',
	      		'value' => $user['username']
			),
			array('name' => 'create_date',
	        	'value' => $model->create_date? $model->create_date:''
			),
			array('name' => 'update_date',
	        	'value' => $model->update_date? $model->update_date:''
	      	),
			array('name' => 'public_flg',
	      		'value' => Constants::$arrayIsPublic[$model->public_flg]
			),
			array('name' => 'feature_flg',
	      		'value' => Constants::$arrayFeature_flag[$model->feature_flg]
			),
		),
	)); ?>
</div>
