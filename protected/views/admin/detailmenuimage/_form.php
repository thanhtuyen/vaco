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
		<?php echo $form->dropDownListRow($model,'menu_id', Menu::listCategory(0, Menu::LIST_MENU), array('prompt'=>'Chọn menu ...'));  ?>
	</div>

	<?php echo $form->textAreaRow($model,'caption',array('rows'=>1, 'cols'=>50, 'class'=>'span4')); ?>
	
<h5>ENGLISH</h5>

	<?php echo $form->textAreaRow($model,'caption_eng',array('rows'=>1, 'cols'=>50, 'class'=>'span4')); ?>
	
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
	        'url'=>'../../detailmenuimage/index',
	      ));
	    } 
	    ?>
	</div>	
</div>
<?php $this->endWidget(); ?>
	
