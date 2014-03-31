<?php
/* @var $this DetailmenuimageController */
/* @var $model Detailmenuimage */

$this->breadcrumbs=array(
	'Detailmenuimages'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List Detailmenuimage', 'url'=>array('index')),
	//array('label'=>'Create Detailmenuimage', 'url'=>array('create')),
	//array('label'=>'View Detailmenuimage', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Detailmenuimage', 'url'=>array('admin')),
);
?>

<h1><?php echo str_replace("###TITLE###", 'Chi Tiết Menu Hình Ảnh', Constants::$listTitleForm['form_update']) .' ' . $model->id; ?></h1>

 <div class="create_user">
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
 </div>