<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */
/* @var $form CActiveForm */
Yii::import('ext.ckeditor.CKEditor');
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
  'id'=>'detail-menu-form',
  'type'=>'horizontal',
  'enableAjaxValidation'=>true,
  'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
<p class="help-block">Fields with <span class="required">*</span> are required.</p>
<?php echo $form->errorSummary($model); ?>
<div class="space5">

  <div class="control-group">
    <?php echo $form->labelEx($model,'menu_id', array('class'=> "control-label")); ?>
    <?php $parent = detailMenu::getListMenu();?>
    <?php // = array_merge(array(0 => 'Root'), $parent);
    //$list_cate = array(0 => 'Root') + $parent;
    ?>
    <div class="controls">
      <?php echo $form->dropDownList($model,'menu_id',$parent ,array('class'=>'span3','maxlength'=>255)); ?>
    </div>

  </div>

  <?php echo $form->textFieldRow($model,'title',array('class'=>'span3','maxlength'=>255)); ?>
  <?php echo $form->textFieldRow($model,'title_eng',array('class'=>'span3','maxlength'=>255)); ?>

  <?php echo $form->textFieldRow($model,'caption',array('class'=>'span3','maxlength'=>255)); ?>
  <?php echo $form->textFieldRow($model,'caption_eng',array('class'=>'span3','maxlength'=>255)); ?>

<!--  --><?php //echo $form->textFieldRow($model,'detail',array('class'=>'span3','maxlength'=>255)); ?>
  <?php echo $form->textFieldRow($model,'detail_eng',array('class'=>'span3','maxlength'=>255)); ?>
  <?php echo $form->fileFieldRow($model, 'image_path'); ?>

  <div class="control-group">
    <?php echo $form->labelEx($model,'list_file_attach', array('class'=> "control-label")); ?>
    <div class="controls">
        <?php
        $this->widget('CMultiFileUpload', array(
                          'model'=>$model,
                          'attribute'=>'list_file_attach',
                         // 'accept'=>'doc|pdf|docx',
                          'max'=> 6,
                          'options'=>array(
                              //'onFileSelect'=>'function(e, v, m){ alert(""onFileSelect - ""+v) }',
      //                        'afterFileSelect'=>'function(e, v, m){ alert(""afterFileSelect - ""+v) }',
      //                        'onFileAppend'=>'function(e, v, m){ alert(""onFileAppend - ""+v) }',
      //                        'afterFileAppend'=>'function(e, v, m){ alert(""afterFileAppend - ""+v) }',
      //                        'onFileRemove'=>'function(e, v, m){ alert(""onFileRemove - ""+v) }',
      //                        'afterFileRemove'=>'function(e, v, m){ alert(""afterFileRemove - ""+v) }',
                          ),
                      ));
      ?>
    </div>
    </div>
  <script src="<?php echo Yii::app()->baseUrl.'/ckeditor/ckeditor.js'; ?>"></script>

  <div class="control-group">
    <?php echo $form->labelEx($model,'detail', array('class'=> "control-label")); ?>
    <div class="controls">
      <?php echo $form->textArea($model, 'detail', array('id'=>'editor1')); ?>
      <?php echo $form->error($model,'detail'); ?>
    </div>
  </div>

  <script type="text/javascript">
    CKEDITOR.replace( 'editor1' );
  </script>
  <div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
      'buttonType'=>'submit',
      'type'=>'primary',
      'label'=>$model->isNewRecord ? 'Create' : 'Save',
    ));

    if($model->isNewRecord){
      $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType'=>'reset',
        'htmlOptions'=>array('style'=>'margin-left: 10px;'),
        'label'=>'Reset',
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

