<?php
/* @var $this MenuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menus',
);

$this->menu=array(
	array('label'=>'Create Menu', 'url'=>array('create')),
	array('label'=>'Manage Menu', 'url'=>array('admin')),
);
?>

<h1>Menus</h1>

<?php //$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); ?>
<div class="span_space_5">

<?php
$this->widget('CTreeView',array(
  'data'=>$dataProvider,
  'prerendered' => 'true',
  'animated'=>'fast', //quick animation
  'collapsed'=>'false',//remember must giving quote for boolean value in here
  'htmlOptions'=>array(
    'class'=>'filetree',//there are some classes that ready to use
  ),
));
?>
</div>