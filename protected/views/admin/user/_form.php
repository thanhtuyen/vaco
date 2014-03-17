<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>


<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
  'id'=>'user-form',
  'type'=>'horizontal',
  'enableAjaxValidation'=>false,
)); ?>

<p class="help-block"><?php echo Constants::$text_required; ?></p>
<?php echo $form->errorSummary($model); ?>

<div class="space5">
  <?php
  if($model->isNewRecord){
    echo $form->textFieldRow($model,'username',array('class'=>'span3','maxlength'=>255));
  } else {
    echo $form->textFieldRow($model,'username',array('class'=>'span3','maxlength'=>255, 'disabled' => 'disabled'));
  }
  ?>
  <?php if($model->isNewRecord):?>
    <div class="control-group">
    <?php echo $form->labelEx($model,'userpass', array('class'=> "control-label required")); ?>
    <?php echo $form->passwordField($model,'userpass',array('class'=>'span3','maxlength'=>255, 'value'=>'')); ?>
      <span class="help_inline" style="float: left; margin-left: 200px;">
          <?php echo $form->error($model,'userpass'); ?>
        </span>
    </div>
  <?php endif; ?>
  <?php echo $form->textFieldRow($model,'user_fullname',array('class'=>'span3','maxlength'=>255)); ?>

  <?php echo $form->textFieldRow($model,'user_mobile',array('class'=>'span3','maxlength'=>255)); ?>

  <?php echo $form->textFieldRow($model,'user_address',array('class'=>'span3','maxlength'=>255)); ?>

  <div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
      'buttonType'=>'submit',
      'type'=>'primary',
      'label'=>$model->isNewRecord ? Constants::$listLabelButton['create'] : Constants::$listLabelButton['update'],
    ));

    if($model->isNewRecord){
      $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType'=>'reset',
        'htmlOptions'=>array('style'=>'margin-left: 10px;'),
        'label'=>Constants::$listLabelButton['reset'],
      ));
    } else {
      $this->widget('bootstrap.widgets.TbButton', array(
        //'buttonType'=>'link',
        'label'=>'Cancel',
        'htmlOptions'=>array('style'=>'margin-left: 10px;'),
        'url'=>'../../User/Admin',
      ));
    }
    ?>
  </div>
</div>
<?php $this->endWidget(); ?>


