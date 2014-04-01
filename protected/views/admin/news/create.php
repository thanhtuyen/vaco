<?php
/* @var $this NewsController */
/* @var $model News */
$menu_id = $_GET['menu_id'];
$this->breadcrumbs=array(
	'News'=>array('admin?menu_id='.$menu_id),
	'Create',
);

$this->menu=array(
	//array('label'=>'List News', 'url'=>array('index')),
	//array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<h1><?php echo str_replace("###TITLE###", 'Tin Tức', Constants::$listTitleForm['form_create']); ?></h1>
<!-- <div class="create_user"> -->
	<?php echo $this->renderPartial('_form', array('model'=>$model, 'modelKeyword'=>$modelKeyword, 'menu_id'=>$menu_id)); ?>
<!-- </div> -->