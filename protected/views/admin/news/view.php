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
	//array('label'=>'Update News', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete News', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<?php
	/*if(app()->news->hasFlash('error')){
	  echo app()->news->getFlash('error');
	} elseif(app()->news->hasFlash('warning')){
	  echo app()->news->getFlash('warning');
	} elseif(app()->news->hasFlash('info')){
	  echo app()->news->getFlash('info');
	} elseif(app()->news->hasFlash('success')){
	  echo '<div class="alert alert-success">'.app()->news->getFlash('success').'</div>';
	}*/
?>

<h1><?php echo str_replace("###TITLE###", 'Tin Tức', Constants::$listTitleForm['form_view']) .' ' . $model->id; ?></h1>

<div class="view_detail_menu">
	<div style="text-align:right"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/thumbnails/bedit.png',"bCreate",array("class"=>"icon_edit")), Yii::app()->createUrl('/news/update/'.$model->id)) ;?></div>
	<?php 
	$user = User::model()->findByPk($model->create_user_id);
	$menu = Menu::model()->findByPk($model->menu_id);
	$this->widget('bootstrap.widgets.TbDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			array('name' => 'menu_id',
				'type' => 'raw',
	      		'value' => $menu['menu_name']
			),
			array('name' => 'title',
				'type' => 'raw',
	      		'value' => CHtml::decode($model->title)
			),
			array('name' => 'caption',
				'type' => 'raw',
	      		'value' => CHtml::decode($model->caption)
			),
			array('name' => 'detail',
            	'type' => 'raw',
	      		'value' => CHtml::decode($model->detail)
			),
			array('name' => 'title_eng',
				'type' => 'raw',
	      		'value' => CHtml::decode($model->title_eng)
			),
			array('name' => 'caption_eng',
				'type' => 'raw',
	      		'value' => CHtml::decode($model->caption_eng)
			),
			array('name' => 'detail_eng',
            	'type' => 'raw',
	      		'value' => CHtml::decode($model->detail_eng)
			),	
			array('name' => 'thumb_image_path',
            'type' => 'raw',
	      		'value' => CHtml::image(Yii::app()->request->baseUrl.News::image_url . $model->thumb_image_path,"",array("class"=>'show_image')),
			),
			array('name' => 'list_file_attach',
	      		'value' => $model->list_file_attach ? $model->list_file_attach : ''
			),
			array('name' => 'create_user_id',
	      		'value' => $user['username']
			),
			array('name' => 'feature_flag',
	      		'value' => Constants::$arrayFeature_flag[$model->feature_flag]
			),
			array('name' => 'create_date',
	        	'value' => $model->create_date? $model->create_date:''
			),	
	      	array('name' => 'update_date',
	        	'value' => $model->update_date? $model->update_date:''
	      	),
	      	array('name' => 'is_public',
	      		'value' => Constants::$arrayIsPublic[$model->is_public]
			),
		),
	)); ?>
	<?php $this->widget('bootstrap.widgets.TbDetailView', array(
		'data'=>$modelKeyword,
		'attributes'=>array(
			array('name' => 'keyword',
	      		'type' => 'raw',
	      		'value' => CHtml::decode($modelKeyword->keyword)
			),
			array('name' => 'keyword_eng',
	      		'type' => 'raw',
	      		'value' => CHtml::decode($modelKeyword->keyword_eng)
			),
		),
	)); ?>
</div>
