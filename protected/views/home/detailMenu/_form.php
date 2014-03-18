<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detail-menu-form',
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
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caption'); ?>
		<?php echo $form->textArea($model,'caption',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'caption'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail'); ?>
		<?php echo $form->textArea($model,'detail',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_eng'); ?>
		<?php echo $form->textField($model,'title_eng',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caption_eng'); ?>
		<?php echo $form->textArea($model,'caption_eng',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'caption_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_eng'); ?>
		<?php echo $form->textArea($model,'detail_eng',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'detail_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_path'); ?>
		<?php echo $form->textArea($model,'image_path',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'image_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'list_file_attach'); ?>
		<?php echo $form->textArea($model,'list_file_attach',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'list_file_attach'); ?>
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
		<?php echo $form->labelEx($model,'feature_flg'); ?>
		<?php echo $form->textField($model,'feature_flg'); ?>
		<?php echo $form->error($model,'feature_flg'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->