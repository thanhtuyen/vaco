<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */
/* @var $form CActiveForm */
Yii::import('ext.ckeditor.CKEditor');
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
  'id'=>'detail-menu-form',
  'type'=>'horizontal',
  'enableAjaxValidation'=>false,
  'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<p class="help-block"><?php echo Constants::$text_required; ?></p>
<?php echo $form->errorSummary($model); ?>

<div class="space5">

  <div class="control-group">
    <?php echo $form->labelEx($model,'menu_id', array('class'=> "control-label")); ?>
    <div class="controls">
    <?php
    $parents = detailMenu::getListMenu($model->menu_id);
    if($model->isNewRecord){
      echo $form->dropDownList($model,'menu_id',$parents ,array( 'prompt'=>'Chọn menu ...'));
    } else{
      echo $form->dropDownList($model,'menu_id',$parents ,array('disabled'=> true));
    }

    ?>
    </div>

  </div>

  <?php echo $form->textFieldRow($model,'title',array('class'=>'span4','maxlength'=>255)); ?>
  <?php echo $form->textAreaRow($model,'caption',array('rows'=>5, 'cols'=>60, 'class'=>'span5')); ?>

  <div class="control-group">
    <?php echo $form->labelEx($model,'detail', array('class'=> "control-label")); ?>
    <div class="controls">
      <?php

      echo $form->textArea($model, 'detail', array('id'=>'editor1', 'style' => 'height:1000px;')); ?>
      <?php echo $form->error($model,'detail'); ?>
    </div>
  </div>
  
	<div class="control-group">
		<?php echo $form->labelEx($model,'image_path', array('class'=> "control-label")); ?>
	  	<div class="controls">
		  <span class="text_require_image"><?php echo Constants::$text_require_image;?></span><br>
		  <?php echo CHtml::activeFileField($model,'image_path'); ?>
		</div>
	</div>
  <div class="controls"><br>
    <?php
    if($model->isNewRecord != '1')
      echo CHtml::image(Yii::app()->request->baseUrl . detailMenu::S_THUMBNAIL . $model->image_path,"",array("class"=>'show_image_update'));
    ?>
  </div>
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
  
<h5>ENGLISH</h5>
  	<?php echo $form->textFieldRow($model,'title_eng',array('class'=>'span4','maxlength'=>255)); ?>
    <?php echo $form->textAreaRow($model,'caption_eng',array('rows'=>5, 'cols'=>60, 'class'=>'span5')); ?>
  	<div class="control-group">
	    <?php echo $form->labelEx($model,'detail_eng', array('class'=> "control-label")); ?>
	    <div class="controls">
	      <?php

	      echo $form->textArea($model, 'detail_eng', array('id'=>'editor2')); ?>
	      <?php echo $form->error($model,'detail_eng'); ?>
	    </div>
	  </div>
  
	<?php echo $form->radioButtonListRow($model,'feature_flg',Constants::$arrayFeature_flag,array('class'=>'span1')); ?>

  <script type="text/javascript">
    CKEDITOR.replace( 'editor1' );
    CKEDITOR.replace( 'editor2' );
  </script>
  
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
	        'url'=>'../../detailmenu/admin',
	      ));
	    } 
	    ?>
	</div>	
</div>
<?php $this->endWidget(); ?>

