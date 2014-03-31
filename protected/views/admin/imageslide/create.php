<?php
/* @var $this ImageslideController */
/* @var $model Imageslide */

$this->breadcrumbs=array(
	'Imageslides'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Imageslide', 'url'=>array('index')),
	//array('label'=>'Manage Imageslide', 'url'=>array('admin')),
);
?>

<h1><?php echo str_replace("###TITLE###", 'Imageslide', Constants::$listTitleForm['form_create']); ?></h1>

 <div class="create_user">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
 </div>