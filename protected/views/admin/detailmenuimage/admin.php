<?php
/* @var $this DetailmenuimageController */
/* @var $model Detailmenuimage */

$this->breadcrumbs=array(
	'Detailmenuimages'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Detailmenuimage', 'url'=>array('index')),
	//array('label'=>'Create Detailmenuimage', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#detailmenuimage-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Constants::$listModule['detail_menu_image']['title']?></h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="view_admin" >
	<div style="text-align:right"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/thumbnails/bplus.png',"bCreate",array("class"=>"icon_plus")), Yii::app()->createUrl('/detailmenuimage/create')) ;?></div>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'detailmenuimage-grid',
		'dataProvider'=>$model->search(),
		//'template'=>"{items}",
		//'filter'=>$model,
		'columns'=>array(
			'id',
			'image_path',
			'caption',
		    array('name' => 'public_flg',
		          'value'=> 'Constants::$arrayIsPublic[$data->public_flg]',
		    ),
		    array('name' => 'feature_flg',
		          'value'=> 'Constants::$arrayFeature_flag[$data->feature_flg]',
		    ),
			array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
	      		'htmlOptions'=>array('style'=>'width: 50px'),
			),
		),
	)); ?>
</div>
