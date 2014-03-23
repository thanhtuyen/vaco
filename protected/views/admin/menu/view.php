<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	$model->id,
);

//$this->menu=array(
//	array('label'=>'List Menu', 'url'=>array('index')),
//	array('label'=>'Create Menu', 'url'=>array('create')),
//	array('label'=>'Update Menu', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Menu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Menu', 'url'=>array('admin')),
//);
?>

<h1><?php echo str_replace("###TITLE###", 'Menu', Constants::$listTitleForm['form_view']) .' ' . $model->id; ?></h1>

<div class="view_user">
  <div style="text-align:right"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/thumbnails/bedit.png',"bCreate",array("class"=>"icon_edit")), Yii::app()->createUrl('/menu/update/'.$model->id)) ;?></div>
<?php
	$user = User::model()->findByPk($model->create_user_id); 
	$this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
    array('name' => 'parent_menu_id',
		'type'  => 'raw',
		'value' => ($model->parent_menu_id == 0) ? $model->getParentName($model->parent_menu_id) : CHtml::link($model->getParentName($model->parent_menu_id),
        	array('view', 'id'=>$model->parent_menu_id))),
    'menu_name',
		'menu_name_eng',
    array('name' => 'menu_type',
      'value' => $model->getNameMenuType($model->menu_type),
    ),
		array('name' => 'create_user_id',
			'value' => $model->User->username,
		),
		array('name' => 'create_date',
        	'value' => $model->create_date? $model->create_date:''
		),
		array('name' => 'update_date',
        	'value' => $model->update_date? $model->update_date:''
      	),
	),
)); ?>
</div>