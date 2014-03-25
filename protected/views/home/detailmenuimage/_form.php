<?php
/* @var $this DetailmenuimageController */
/* @var $model Detailmenuimage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detailmenuimage-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_id'); ?>
		<?php echo $form->textField($model,'menu_id'); ?>
		<?php echo $form->error($model,'menu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caption'); ?>
		<?php echo $form->textArea($model,'caption',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'caption'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caption_eng'); ?>
		<?php echo $form->textArea($model,'caption_eng',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'caption_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_path'); ?>
		<?php echo $form->textField($model,'image_path',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'image_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user'); ?>
		<?php echo $form->textField($model,'create_user'); ?>
		<?php echo $form->error($model,'create_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
		<?php echo $form->error($model,'update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'del_flg'); ?>
		<?php echo $form->textField($model,'del_flg'); ?>
		<?php echo $form->error($model,'del_flg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'public_flg'); ?>
		<?php echo $form->textField($model,'public_flg'); ?>
		<?php echo $form->error($model,'public_flg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'feature_flg'); ?>
		<?php echo $form->textField($model,'feature_flg'); ?>
		<?php echo $form->error($model,'feature_flg'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->