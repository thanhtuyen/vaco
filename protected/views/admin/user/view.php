<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->userid,
);

$this->menu=array(
//	array('label'=>'List User', 'url'=>array('index')),
//	array('label'=>'Create User', 'url'=>array('create')),
//	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->userid)),
//	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->userid),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>
<?php

if(app()->user->hasFlash('error')){
  echo app()->user->getFlash('error');
} elseif(app()->user->hasFlash('warning')){
  echo app()->user->getFlash('warning');
} elseif(app()->user->hasFlash('info')){
  echo app()->user->getFlash('info');
} elseif(app()->user->hasFlash('success')){
  echo '<div class="alert alert-success">'.app()->user->getFlash('success').'</div>';
}

?>
<h1>View User #<?php echo $model->userid; ?></h1>
<div class="view_user">
  <?php  if(app()->user->getState('roles') =="admin"):?>
  <div style="text-align:  right"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/thumbnails/ql-users.gif'), Yii::app()->createUrl('/user/update/'.$model->userid)) ;?></div>
  <?php endif;?>
  <?php $this->widget('bootstrap.widgets.TbDetailView',array(
    'data'=>$model,
    'attributes'=>array(
      'username',
//      'userpass',
      'user_fullname',
      'user_mobile',
      'user_address',
      'create_user',

      array('name' => 'create_date',
        'value' => $model->create_date? $model->create_date:""),

      array('name' => 'update_date',
        'value' => $model->update_date? $model->update_date:''),

    ),
  )); ?>

</div>
