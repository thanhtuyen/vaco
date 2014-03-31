<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('admin'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List News', 'url'=>array('index')),
	//array('label'=>'Create News', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#news-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Constants::$listModule['news']['title']?></h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="view_admin" >
	<div style="text-align:right"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/thumbnails/bplus.png',"bCreate",array("class"=>"icon_plus")), Yii::app()->createUrl('/news/create')) ;?></div>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'news-grid',
		'dataProvider'=>$model->search(),
		//'template'=>"{items}",
		//'filter'=>$model,
		'columns'=>array(
			'id',
			'title',
			//'caption',
      		'create_date',
		    array(	'name' => 'create_user_id',
		          	'value'=> '$data->User->username',
		    ),
			/*'title_eng',		
			'caption_eng',
			'detail_eng',
			'thumb_image_path',
			'list_file_attach',
			'create_user_id',
			'create_date',
			'feature_flag',
			'update_date',
			'is_public',
			'del_flg',
			*/
			array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
	      		'htmlOptions'=>array('style'=>'width: 50px'),
			),
		),
	)); ?>
</div>
