<!-- BEGIN LEFT MENU -->
<?php
  require '/../layouts/menu_left.php' ;

?>

<!-- END LEFT MENU -->
<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
  'Contact',
);
?>
<div class="gt_coltwo">

  <h1>Contact Us</h1>

  <?php if(Yii::app()->user->hasFlash('contact')): ?>

    <div class="flash-success">
      <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>

  <?php else: ?>

    <p>
      If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="form">

      <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'contact-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
          'validateOnSubmit'=>true,
        ),
      )); ?>

      <p class="note">Fields with <span class="required">*</span> are required.</p>

      <?php echo $form->errorSummary($model); ?>

      <div class="row">
        <?php echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model,'name'); ?>
        <?php echo $form->error($model,'name'); ?>
      </div>

      <div class="row">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email'); ?>
        <?php echo $form->error($model,'email'); ?>
      </div>

      <div class="row">
        <?php echo $form->labelEx($model,'subject'); ?>
        <?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
        <?php echo $form->error($model,'subject'); ?>
      </div>

      <div class="row">
        <?php echo $form->labelEx($model,'body'); ?>
        <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'body'); ?>
      </div>

      <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
      </div>

      <?php $this->endWidget(); ?>

    </div><!-- form -->

  <?php endif; ?>
</div>

<!-- BEGIN RIGHT MENU -->
<?php
require '/../layouts/menu_right.php' ;

?>
<!-- END RIGHT MENU -->