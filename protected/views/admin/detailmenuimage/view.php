<?php
/* @var $this DetailmenuimageController */
/* @var $model Detailmenuimage */

$this->breadcrumbs=array(
	'Detailmenuimages'=>array('index'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'List Detailmenuimage', 'url'=>array('index')),
	//array('label'=>'Create Detailmenuimage', 'url'=>array('create')),
	//array('label'=>'Update Detailmenuimage', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Detailmenuimage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Detailmenuimage', 'url'=>array('admin')),
);
?>

<h1><?php echo str_replace("###TITLE###", 'Menu Hình Ảnh', Constants::$listTitleForm['form_view']) .' ' . $model->id; ?></h1>

<div class="view_user">
	<div style="text-align:right"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/thumbnails/bedit.png',"bCreate",array("class"=>"icon_edit")), Yii::app()->createUrl('/detailmenuimage/update/'.$model->id)) ;?></div>
	<?php
  $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
      array('name' => 'menu_id',
        'value' => $model->Menu->menu_name),
      'caption',

      array('name' => 'image_path',
        'type' => 'raw',
        'value' => CHtml::image(Yii::app()->request->baseUrl.Detailmenuimage::image_url . $model->image_path,"",array("class"=>'show_image')),
      ),

      array('label' => 'ENGLISH', 'value' => ''),

      'caption_eng',
      array('name' => 'create_date',
        'value' => $model->create_date? $model->create_date:""),

      array('name' => 'update_date',
        'value' => $model->update_date? $model->update_date:''),
      array('name' => 'create_user',
        'value'=> $model->User->username,
      ),
    ),
  )); ?>

</div>
