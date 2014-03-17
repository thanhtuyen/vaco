<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'List Menu', 'url'=>array('index')),
//	array('label'=>'Create Menu', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#menu-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php

if(app()->user->hasFlash('error')){
  echo app()->user->getFlash('error');
} elseif(app()->user->hasFlash('warning')){
  echo app()->user->getFlash('warning');
} elseif(app()->user->hasFlash('info')){
  echo app()->user->getFlash('info');
} elseif(app()->user->hasFlash('success')){
  echo '<div class="alert alert-success">'.app()->user->getFlash('success').'</div>';
}

?>
<h1><?php echo Constants::$listModule['menu']['title']?></h1>

<!--<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="view_admin">
  <div style="text-align:right"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/thumbnails/bplus.png',"bCreate",array("class"=>"icon_plus")), Yii::app()->createUrl('/menu/create')) ;?></div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'menu-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
	    array('name'=> 'parent_menu_id',
				'value'=>  '$data->getParentName($data->parent_menu_id)',
	    ),
		'menu_name',
		'menu_name_eng',
		'menu_type',
		'create_date',
		/*
		'create_user_id',
		'update_date',
		'del_flg',
		*/
    array(
      'class'=>'bootstrap.widgets.TbButtonColumn',
      'htmlOptions'=>array('style'=>'width: 50px'),
    ),
	),
)); ?>
</div>