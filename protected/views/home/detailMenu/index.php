<?php
/* @var $this DetailMenuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detail Menus',
);

$this->menu=array(
	array('label'=>'Create detailmenu', 'url'=>array('create')),
	array('label'=>'Manage detailmenu', 'url'=>array('admin')),
);
?>

<h1>Detail Menus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
