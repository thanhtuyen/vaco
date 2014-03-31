<?php
/* @var $this ImageslideController */
/* @var $model Imageslide */

$this->breadcrumbs=array(
	'Imageslides'=>array('admin'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Imageslide', 'url'=>array('index')),
	//array('label'=>'Create Imageslide', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#imageslide-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Constants::$listModule['image_slide']['title']?></h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="view_admin" >
	<div style="text-align:right"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/thumbnails/bplus.png',"bCreate",array("class"=>"icon_plus")), Yii::app()->createUrl('/imageslide/create')) ;?></div>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'imageslide-grid',
		//'template'=>"{items}",
		'dataProvider'=>$model->search(),
		//'filter'=>$model,
		'columns'=>array(
			'id',
			'image_path',
			'title',
			//'caption',
			//'title_eng',
			//'caption_eng',

			'create_date',
      array(	'name' => 'create_user_id',
        'value'=> '$data->User->username',
      ),
      /*
			'update_date',
			'del_flg',
			'imageslidecol',
			*/
			array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
	      		'htmlOptions'=>array('style'=>'width: 50px'),
			),
		),
	)); ?>
</div>
