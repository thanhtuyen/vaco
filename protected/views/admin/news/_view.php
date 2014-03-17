<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_id')); ?>:</b>
	<?php echo CHtml::encode($data->menu_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caption')); ?>:</b>
	<?php echo CHtml::encode($data->caption); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail')); ?>:</b>
	<?php echo CHtml::encode($data->detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_eng')); ?>:</b>
	<?php echo CHtml::encode($data->title_eng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caption_eng')); ?>:</b>
	<?php echo CHtml::encode($data->caption_eng); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_eng')); ?>:</b>
	<?php echo CHtml::encode($data->detail_eng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumb_image_path')); ?>:</b>
	<?php echo CHtml::encode($data->thumb_image_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_file_attach')); ?>:</b>
	<?php echo CHtml::encode($data->list_file_attach); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('feature_flag')); ?>:</b>
	<?php echo CHtml::encode($data->feature_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_public')); ?>:</b>
	<?php echo CHtml::encode($data->is_public); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('del_flg')); ?>:</b>
	<?php echo CHtml::encode($data->del_flg); ?>
	<br />

	*/ ?>

</div>