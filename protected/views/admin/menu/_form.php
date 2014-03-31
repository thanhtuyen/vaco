<?php
/* @var $this MenuController */
/* @var $model Menu */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
  'id'=>'menu-form',
  'type'=>'horizontal',
  'enableAjaxValidation'=>false,
)); ?>

<p class="help-block"><?php echo Constants::$text_required; ?></p>
<?php echo $form->errorSummary($model); ?>

<?php //echo $form->errorSummary($employeemodel); ?>
<div class="space5">
    <div class="control-group">
      <?php echo $form->labelEx($model,'parent_menu_id', array('class'=> "control-label")); ?>
      <?php $parent = Menu::listCategory();?>
      <?php // = array_merge(array(0 => 'Root'), $parent);
      $list_cate = array(0 => 'Root') + $parent;
      ?>
      <div class="controls">
        <?php echo $form->dropDownList($model,'parent_menu_id',$list_cate ,array('class'=>'span3','maxlength'=>255)); ?>
      </div>

    </div>
  <?php echo $form->textFieldRow($model,'menu_name',array('class'=>'span3','maxlength'=>255)); ?>

  <?php echo $form->textFieldRow($model,'menu_name_eng',array('class'=>'span3','maxlength'=>255)); ?>

<!--  --><?php //echo $form->textFieldRow($model,'menu_type',array('class'=>'span3','maxlength'=>255)); ?>

<!--  --><?php echo $form->dropDownListRow($model,'menu_type', $list_menu_type,array('class'=>'span3','maxlength'=>255, 'prompt'=>'Chọn loại menu ...')) ?>
  
  <?php echo $form->radioButtonListRow($model,'priority',Constants::$arrayPriority,array('class'=>'span1')); ?>
  
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

<script language="javascript">
  $(document).ready(function() {
    $("#Menu_parent_menu_id").change(function(){
      if($(this).val() == 0) {
        $('#Menu_menu_type').removeAttr('disabled', 'disabled');
      } else {
        $('#Menu_menu_type').attr('disabled', 'disabled');
      }
    });
    $('#Menu_parent_menu_id').trigger('change');
  });
</script>