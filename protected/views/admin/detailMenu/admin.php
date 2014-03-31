<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */

$this->breadcrumbs=array(
	'Detail Menus'=>array('admin'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'List detailmenu', 'url'=>array('index')),
//	array('label'=>'Create detailmenu', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#detail-menu-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Constants::$listModule['detail_menu']['title']?></h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="view_admin">
	<div style="text-align:right"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/thumbnails/bplus.png',"bCreate",array("class"=>"icon_plus")), Yii::app()->createUrl('/detailmenu/create')) ;?></div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'detail-menu-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
    'create_date',
    array('name' => 'create_user',
          'value'=> '$data->User->username',
    ),
		//'detail',
		/*
		'caption_eng',
		'detail_eng',
		'image_path',
		'list_file_attach',
		'create_date',
		'create_user',
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