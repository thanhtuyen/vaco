<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */

$this->breadcrumbs=array(
	'Detail Menus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List detailMenu', 'url'=>array('index')),
	array('label'=>'Manage detailMenu', 'url'=>array('admin')),
);
?>

<h1>Create detailMenu</h1>
<div >
  <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
