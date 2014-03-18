<?php
/* @var $this MenuController */
/* @var $model Menu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_menu_id'); ?>
		<?php echo $form->textField($model,'parent_menu_id'); ?>
		<?php echo $form->error($model,'parent_menu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_name'); ?>
		<?php echo $form->textField($model,'menu_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'menu_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_name_eng'); ?>
		<?php echo $form->textField($model,'menu_name_eng',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'menu_name_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_type'); ?>
		<?php echo $form->textField($model,'menu_type'); ?>
		<?php echo $form->error($model,'menu_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->