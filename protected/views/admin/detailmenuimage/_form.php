<?php
/* @var $this DetailmenuimageController */
/* @var $model Detailmenuimage */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'detailmenuimage-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<p class="help-block"><?php echo Constants::$text_required; ?></p>
<?php echo $form->errorSummary($model); ?>

<div class="space5"> 
	<div class="control-group">
		<?php echo $form->dropDownListRow($model,'menu_id', Menu::listCategory(0, Menu::TYPE_IMAGE), array('prompt'=>'Chọn menu ...'));  ?>
	</div>
	
	<div class="control-group">
	    <?php echo $form->labelEx($model,'image_path', array('class'=> "control-label")); ?>
	    <div class="controls">
	    	<span class="text_require_image"><?php echo Constants::$text_require_image;?></span><br>
	 		<?php echo CHtml::activeFileField($model,'image_path'); ?>
			<?php //echo $form->fileField($model,'thumb_image_path'); ?>
			<span class="help_inline" style="float: left; margin-left: 200px;">
				<?php //echo $form->error($model,'thumb_image_path'); ?>
			</span>	
		</div>
		</div>
		<div class="controls"><br>
			<?php 
				if($model->isNewRecord != '1')
					echo CHtml::image(Yii::app()->request->baseUrl . News::image_url . $model->image_path,"",array("class"=>'show_image_update'));
			?>	
		</div>	
	</div>	

	<?php echo $form->textAreaRow($model,'caption',array('rows'=>3, 'cols'=>50, 'class'=>'span4')); ?>
	
<h5>ENGLISH</h5>

	<?php echo $form->textAreaRow($model,'caption_eng',array('rows'=>3, 'cols'=>50, 'class'=>'span4')); ?>
	
	<?php echo $form->radioButtonListRow($model,'public_flg',Constants::$arrayIsPublic,array('class'=>'span1')); ?>
	<?php echo $form->radioButtonListRow($model,'feature_flg',Constants::$arrayFeature_flag,array('class'=>'span1')); ?>

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
	        'url'=>'../../detailmenuimage/admin',
	      ));
	    } 
	    ?>
	</div>	
</div>
<?php $this->endWidget(); ?>
	
