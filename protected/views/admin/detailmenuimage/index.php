<?php
/* @var $this DetailmenuimageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detailmenuimages',
);

$this->menu=array(
	//array('label'=>'Create Detailmenuimage', 'url'=>array('create')),
	//array('label'=>'Manage Detailmenuimage', 'url'=>array('admin')),
);
?>

<h1>Detailmenuimages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
