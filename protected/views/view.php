<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-view-form',
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
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'feature_flag'); ?>
		<?php echo $form->textField($model,'feature_flag'); ?>
		<?php echo $form->error($model,'feature_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_public'); ?>
		<?php echo $form->textField($model,'is_public'); ?>
		<?php echo $form->error($model,'is_public'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'del_flg'); ?>
		<?php echo $form->textField($model,'del_flg'); ?>
		<?php echo $form->error($model,'del_flg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title'); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_eng'); ?>
		<?php echo $form->textField($model,'title_eng'); ?>
		<?php echo $form->error($model,'title_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumb_image_path'); ?>
		<?php echo $form->textField($model,'thumb_image_path'); ?>
		<?php echo $form->error($model,'thumb_image_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'list_file_attach'); ?>
		<?php echo $form->textField($model,'list_file_attach'); ?>
		<?php echo $form->error($model,'list_file_attach'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caption'); ?>
		<?php echo $form->textField($model,'caption'); ?>
		<?php echo $form->error($model,'caption'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail'); ?>
		<?php echo $form->textField($model,'detail'); ?>
		<?php echo $form->error($model,'detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caption_eng'); ?>
		<?php echo $form->textField($model,'caption_eng'); ?>
		<?php echo $form->error($model,'caption_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_eng'); ?>
		<?php echo $form->textField($model,'detail_eng'); ?>
		<?php echo $form->error($model,'detail_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
		<?php echo $form->error($model,'update_date'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->