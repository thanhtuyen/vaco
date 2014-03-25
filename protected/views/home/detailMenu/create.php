<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */

$this->breadcrumbs=array(
	'Detail Menus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List detailmenu', 'url'=>array('index')),
	array('label'=>'Manage detailmenu', 'url'=>array('admin')),
);
?>

<h1>Create detailMenu</h1>
<?php echo Yii::app()->language;?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>