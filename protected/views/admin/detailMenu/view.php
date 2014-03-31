<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */

$this->breadcrumbs=array(
	'Detail Menus'=>array('admin'),
	$model->title,
);

//$this->menu=array(
//	array('label'=>'List detailmenu', 'url'=>array('index')),
//	array('label'=>'Create detailmenu', 'url'=>array('create')),
//	array('label'=>'Update detailmenu', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete detailmenu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage detailmenu', 'url'=>array('admin')),
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
    array('name' => 'title',
      'type' => 'raw',
      'value'=> CHtml::decode($model->title)),

    array('name' => 'caption',
      'type' => 'raw',
      'value'=> CHtml::decode($model->caption)),
    array('name' => 'detail',
      'type' => 'raw',
      'value'=> CHtml::decode($model->detail)),
    array('name' => 'image_path',
      'type' => 'raw',
      'value' => CHtml::image(Yii::app()->request->baseUrl.detailMenu::S_THUMBNAIL . $model->image_path,"",array("class"=>'show_image')),
    ),
      'list_file_attach',
    array('label' => 'ENGLISH', 'value' => ''),
    'title_eng',

    array('name' => 'caption_eng',
      'type' => 'raw',
      'value'=> CHtml::decode($model->caption_eng)),
    array('name' => 'detail_eng',
      'type' => 'raw',
      'value'=> CHtml::decode($model->detail_eng)),

    array('name' => 'create_date',
      'value' => $model->create_date? $model->create_date:""),

    array('name' => 'update_date',
      'value' => $model->update_date? $model->update_date:''),
    array('name' => 'create_user',
      'value'=> $model->User->username,
    ),
  ),
)); ?>



  <?php //echo CHtml::decode($model->detail_eng);?>
</div>
