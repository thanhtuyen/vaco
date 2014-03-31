<?php
/* @var $this DetailmenuimageController */
/* @var $model Detailmenuimage */

$this->breadcrumbs=array(
	'Detailmenuimages'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Detailmenuimage', 'url'=>array('index')),
	//array('label'=>'Manage Detailmenuimage', 'url'=>array('admin')),
);
?>

<h1><?php echo str_replace("###TITLE###", 'Chi Tiết Menu Hình Ảnh', Constants::$listTitleForm['form_create']); ?></h1>

 <div class="create_user">
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
 </div>