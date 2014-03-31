<?php
/* @var $this ImageslideController */
/* @var $model Imageslide */

$this->breadcrumbs=array(
	'Imageslides'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List Imageslide', 'url'=>array('index')),
	//array('label'=>'Create Imageslide', 'url'=>array('create')),
	//array('label'=>'View Imageslide', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Imageslide', 'url'=>array('admin')),
);
?>

<h1><?php echo str_replace("###TITLE###", 'Imageslide', Constants::$listTitleForm['form_update']) .' ' . $model->id; ?></h1>

 <div class="create_user">
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
 </div>