<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */

$this->breadcrumbs=array(
	'Detail Menus'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List detailMenu', 'url'=>array('index')),
	array('label'=>'Create detailMenu', 'url'=>array('create')),
);

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


<h1>Manage Detail Menus</h1><?php echo Yii::app()->language;?>
<?php
echo Yii::t('strings','chào mừng đến với website');

echo Yii::t('strings','you have {count} new emails', array('{count}'=>5));

echo Yii::t('strings','n==1#one book|n>1#many books', array(2));
?>
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'detail-menu-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'menu_id',
		'title',
		'caption',
		'detail',
		'title_eng',
		/*
		'caption_eng',
		'detail_eng',
		'image_path',
		'list_file_attach',
		'create_date',
		'create_user',
		'update_date',
		'del_flg',
		'feature_flg',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<script type="text/javascript">

</script>