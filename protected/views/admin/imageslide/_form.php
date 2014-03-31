<?php
/* @var $this ImageslideController */
/* @var $model Imageslide */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
  	'id'=>'imageslide-form',
  	'type'=>'horizontal',
  	'enableAjaxValidation'=>false,
	//'htmlOptions' => array('enctype' => $model->isNewRecord ? '' : 'multipart/form-data'),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="help-block"><?php echo Constants::$text_required; ?></p>
	<?php echo $form->errorSummary($model); ?>

<div class="space5">  
		<?php echo $form->textFieldRow($model,'title',array('class'=>'span4','maxlength'=>255)); ?>
    <div class="control-group">
        <label class="control-label required" for="Imageslide_title">
          Hình ảnh
          <span class="required">*</span>
        </label>
        <div class="controls">
          <span class="text_require_image"><?php echo Constants::$text_require_image;?></span><br>
        <?php echo CHtml::activeFileField($model,'image_path'); ?>
        <?php //echo $form->fileField($model,'image_path'); ?>
        <span class="help_inline" style="float: left; margin-left: 200px;">
          <?php //echo $form->error($model,'image_path'); ?>
        </span>
      </div>
      <br>
      <div class="controls">
        <?php
          if($model->isNewRecord != '1')
            echo CHtml::image(Yii::app()->request->baseUrl . Imageslide::image_url . $model->image_path,"",array("class"=>'show_image_update'));
        ?>
      </div>
    </div>
  
  <?php echo $form->textAreaRow($model,'caption',array('rows'=>3, 'cols'=>50, 'class'=>'span4')); ?>
  <h5>ENGLISH</h5>
  <?php echo $form->textFieldRow($model,'title_eng',array('class'=>'span4','maxlength'=>255)); ?>

  <?php echo $form->textAreaRow($model,'caption_eng',array('rows'=>3, 'cols'=>50, 'class'=>'span4')); ?>

	<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
     	'buttonType'=>'submit',
      	'type'=>'primary',
		'htmlOptions'   => array('name'=> 'bCreate','id'=> 'bCreate'),
      	'label'=>$model->isNewRecord ? Constants::$listLabelButton['create'] : Constants::$listLabelButton['update'],
    ));

    if($model->isNewRecord){
      $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType'=>'reset',
        'htmlOptions'=>array('style'=>'margin-left: 10px;','name'=>'bReset','id'=> 'bReset'),
        'label'=>Constants::$listLabelButton['reset'],
      ));
    } else {
      $this->widget('bootstrap.widgets.TbButton', array(
        //'buttonType'=>'link',
        'label'=>Constants::$listLabelButton['cancel'],
        'htmlOptions'=>array('style'=>'margin-left: 10px;','name'=>'bCancel','id'=> 'bCancel'),
        'url'=>'../../imageslide/index',
      ));
    } 
    ?>
	</div>
</div>
<?php $this->endWidget(); ?>