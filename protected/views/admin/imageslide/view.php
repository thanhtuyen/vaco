<?php
/* @var $this ImageslideController */
/* @var $model Imageslide */

$this->breadcrumbs=array(
	'Imageslides'=>array('index'),
	$model->title,
);

$this->menu=array(
	//array('label'=>'List Imageslide', 'url'=>array('index')),
	//array('label'=>'Create Imageslide', 'url'=>array('create')),
	//array('label'=>'Update Imageslide', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Imageslide', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Imageslide', 'url'=>array('admin')),
);
?>

<h1><?php echo str_replace("###TITLE###", 'Imageslide', Constants::$listTitleForm['form_view']) .' ' . $model->id; ?></h1>

<div class="view_user">
	<div style="text-align:right"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/thumbnails/bplus.png',"bCreate",array("class"=>"icon_plus")), Yii::app()->createUrl('/imageslide/update/'.$model->id)) ;?></div>
	<?php 
	$user = User::model()->findByPk($model->create_user_id);
	$this->widget('bootstrap.widgets.TbDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			array('name' => 'image_path',
	      		'value' => $model->image_path ? $model->image_path : ''
			),
			array('name' => 'title',
	      		'value' => CHtml::decode($model->title)
			),
			array('name' => 'caption',
	      		'value' => CHtml::decode($model->caption)
			),
			array('name' => 'title_eng',
	      		'value' => CHtml::decode($model->title_eng)
			),
			array('name' => 'caption_eng',
	      		'value' => CHtml::decode($model->caption_eng)
			),
			array('name' => 'create_user_id',
	      		'value' => $user['username']
			),
			array('name' => 'create_date',
	        	'value' => $model->create_date? $model->create_date:''),	
	      	array('name' => 'update_date',
	        	'value' => $model->update_date? $model->update_date:''),
			
		),
	)); ?>
</div>