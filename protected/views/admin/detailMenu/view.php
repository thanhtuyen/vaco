<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */

$this->breadcrumbs=array(
	'Detail Menus'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List detailMenu', 'url'=>array('index')),
	array('label'=>'Create detailMenu', 'url'=>array('create')),
	array('label'=>'Update detailMenu', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete detailMenu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage detailMenu', 'url'=>array('admin')),
);
?>

<h1>View detailMenu #<?php echo $model->id; ?></h1>
<div class="view_user"> 
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
    array('name' => 'menu_id',
      'value' => $model->Menu->menu_name),
    'title','title_eng',
		'caption','caption_eng',
		'detail','detail_eng',
		'image_path',
		'list_file_attach',
    array('name' => 'create_date',
      'value' => $model->create_date? $model->create_date:""),

    array('name' => 'update_date',
      'value' => $model->update_date? $model->update_date:''),

  ),
)); ?>
  <?php echo CHtml::decode($model->detail);?>
</div>