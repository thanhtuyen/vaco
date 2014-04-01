<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('admin?menu_id='.$menu_id),
	$model->title=>array('view','id'=>$model->id,'menu_id'=>$menu_id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List News', 'url'=>array('index')),
	//array('label'=>'Create News', 'url'=>array('create')),
	//array('label'=>'View News', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<h1><?php echo str_replace("###TITLE###", 'Imageslide', Constants::$listTitleForm['form_update']) .' ' . $model->id; ?></h1>

<!-- <div class="create_user"> -->
<?php echo $this->renderPartial('_form', array('model'=>$model, 'modelKeyword'=>$modelKeyword, 'menu_id'=>$menu_id)); ?>
<!-- </div> -->