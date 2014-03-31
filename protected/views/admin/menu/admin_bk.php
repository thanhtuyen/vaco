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

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
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
	    array('name'=> 'menu_type',
	      	'type' => 'raw',
	      	'value'=>  '$data->getNameMenuType($data->menu_type)',
	    	'htmlOptions'=>array('style'=>'text-align: center'),
	    ),
	    array('name'=> 'priority',
	      	'type' => 'raw',
	      	'value'=>  'Constants::$arrayPriority["$data->priority"]',
	    	'htmlOptions'=>array('style'=>'text-align: center'),
	    
	    ),
		'create_date',
		/*
		'create_user_id',
		'update_date',
		'del_flg',
		*/
    array(
      'class'=>'CButtonColumn',
      'template'=>' {view} {update} {delete} {view_news} {view_detail_menu} {view_detail_image}',
      'header'=>'Actions',
      'buttons'=>array(
        'view' => array(
          'imageUrl'=>Yii::app()->request->baseUrl.'/images/thumbnails/view.png',
          'url'=>'Yii::app()->createUrl("menu/view",array("id"=>$data->id))',
        ),
        'update' => array(
          'imageUrl'=>Yii::app()->request->baseUrl.'/images/thumbnails/ico_edit.png',
          'url'=>'Yii::app()->createUrl("menu/update",array("id"=>$data->id))',
        ),
        'delete' => array(
          'imageUrl'=>Yii::app()->request->baseUrl.'/images/thumbnails/delete.png',
          'url'=>'Yii::app()->createUrl("menu/delete",array("id"=>$data->id))',
        )
      ,'view_news' => array(
          'imageUrl'=>Yii::app()->request->baseUrl.'/images/thumbnails/icon_news.png',
          'url'=>'Yii::app()->createUrl("news/admin",array("menu_id"=>$data->id))',
          'visible'=>'$data->menu_type == 1 || ($data->menu_type == 2 && $data->parent_menu_id != 0)',
        ),
        'view_detail_menu' => array(
          'imageUrl'=>Yii::app()->request->baseUrl.'/images/thumbnails/icon_news.png',
          'url'=>'Yii::app()->createUrl("detailmenu/admin",array("menu_id"=>$data->id))',
          'visible'=>'$data->menu_type == 2 && $data->parent_menu_id == 0',
        ),
        'view_detail_image' => array(
          'imageUrl'=>Yii::app()->request->baseUrl.'/images/thumbnails/icon_news.png',
          'url'=>'Yii::app()->createUrl("detailmenuimage/admin",array("menu_id"=>$data->id))',
          'visible'=>'$data->menu_type == 3',
        ),

      ),
      'htmlOptions'=>array('width'=>100,'align'=>'center'),
    ),
	),
)); ?>
</div>