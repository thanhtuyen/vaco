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
	<div class="control-group">		
		<?php echo $form->textFieldRow($model,'title',array('class'=>'span3','maxlength'=>255)); ?>
	</div>	
 
	<div class="control-group">
		<?php echo $form->labelEx($model,'image_path', array('class'=> "control-label")); ?>
	    <div class="controls">
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
					echo CHtml::image(Yii::app()->request->baseUrl . Imageslide::image_url . $model->image_path,"",array("width"=>100, "height"=>40));
			?>
		</div>
	</div>
  
  <?php echo $form->textFieldRow($model,'caption',array('class'=>'span3','maxlength'=>255)); ?>
  <h5>ENGLISH</h5>
  <?php echo $form->textFieldRow($model,'title_eng',array('class'=>'span3','maxlength'=>255)); ?>

  <?php echo $form->textFieldRow($model,'caption_eng',array('class'=>'span3','maxlength'=>255)); ?>

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