<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */

$this->breadcrumbs=array(
	'Detail Menus'=>array('index'),
	$model->title,
);

//$this->menu=array(
//	array('label'=>'List detailMenu', 'url'=>array('index')),
//	array('label'=>'Create detailMenu', 'url'=>array('create')),
//	array('label'=>'Update detailMenu', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete detailMenu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage detailMenu', 'url'=>array('admin')),
//);
?>

<h1><?php echo str_replace("###TITLE###", 'Menu', Constants::$listTitleForm['form_view']) .' ' . $model->id; ?></h1>

<div class="view_detail_menu">
	<div style="text-align:right"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/thumbnails/bedit.png',"bCreate",array("class"=>"icon_edit")), Yii::app()->createUrl('/detailmenu/update/'.$model->id)) ;?></div>
<?php
//print_r($model->detail);
//$detail = CHtml::decode($model->detail);
$this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
    array('name' => 'menu_id',
      	'value' => $model->Menu->menu_name),
    'title',
    'caption',
    array('name' => 'detail',
      'type' => 'raw',
      'value'=> $model->detail),
      'image_path',
      'list_file_attach',
    array('label' => 'ENGLISH', 'value' => ''),
    'title_eng',
    'caption_eng',

    array('name' => 'detail_eng',
      'type' => 'raw',
      'value'=> $model->detail_eng),

    array('name' => 'create_date',
      'value' => $model->create_date? $model->create_date:""),

    array('name' => 'update_date',
      'value' => $model->update_date? $model->update_date:''),

  ),
)); ?>



  <?php //echo CHtml::decode($model->detail_eng);?>
</div>
