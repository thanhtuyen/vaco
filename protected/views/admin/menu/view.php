<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Menu', 'url'=>array('index')),
	array('label'=>'Create Menu', 'url'=>array('create')),
	array('label'=>'Update Menu', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Menu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Menu', 'url'=>array('admin')),
);
?>

<h1>View Menu #<?php echo $model->id; ?></h1>
<div class="view_user">
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
    array('name' => 'parent_menu_id',
      'type'  => 'raw',
      'value' => ($model->parent_menu_id == 0) ? $model->getParentName() : CHtml::link($model->getParentName(),
        array('view', 'id'=>$model->parent_menu_id))),
    'menu_name',
		'menu_name_eng',
		'menu_type',
		'create_date',
		'create_user_id',
		'update_date',
		'del_flg',
	),
)); ?>
</div>