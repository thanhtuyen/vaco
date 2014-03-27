<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'news-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="help-block"><?php echo Constants::$text_required; ?></p>
	<?php echo $form->errorSummary($model); ?>
	
	<div class="space5">  
		<div class="control-group">
		<?php 
				echo $form->dropDownListRow($model,'menu_id', Menu::listCategory(0, Menu::LIST_MENU), array('prompt'=>'Chọn menu ...'));
			 ?>
		</div>
	
		<?php echo $form->textFieldRow($model,'title',array('class'=>'span4','maxlength'=>255)); ?>
		<?php echo $form->textAreaRow($model,'caption',array('rows'=>5, 'cols'=>60, 'class'=>'span5')); ?>
	
		<?php //echo $form->textAreaRow($model,'detail',array('rows'=>10, 'cols'=>50, 'class'=>'span4')); ?>		
		<script src="<?php echo Yii::app()->baseUrl.'/ckeditor/ckeditor.js'; ?>"></script>
		<div class="control-group">
			<?php echo $form->labelEx($model,'detail', array('class'=> "control-label")); ?>
			<div class="controls">
				<?php
        echo $form->textArea($model, 'detail', array('id'=>'editor1')); ?>
        <?php echo $form->error($model,'detail'); ?>
			</div>
		</div>				
		<script type="text/javascript">CKEDITOR.replace('editor1');</script>
		
<h5>ENGLISH</h5>
		<?php echo $form->textFieldRow($model,'title_eng',array('class'=>'span4','maxlength'=>45)); ?>
		<?php echo $form->textAreaRow($model,'caption_eng',array('rows'=>5, 'cols'=>60, 'class'=>'span5')); ?>
	
		<?php //echo $form->textAreaRow($model,'detail_eng',array('rows'=>10, 'cols'=>50, 'class'=>'span4')); ?>		
		<div class="control-group">
			<?php echo $form->labelEx($model,'detail_eng', array('class'=> "control-label")); ?>
			<div class="controls">
				<?php

        echo $form->textArea($model, 'detail_eng', array('id'=>'editor2')); ?>
				<?php echo $form->error($model,'detail_eng'); ?>
			</div>
		</div>
		<script type="text/javascript">CKEDITOR.replace('editor2');</script>
		
		<?php echo $form->radioButtonListRow($model,'is_public',Constants::$arrayIsPublic,array('class'=>'span1')); ?>
		<?php echo $form->radioButtonListRow($model,'feature_flag',Constants::$arrayFeature_flag,array('class'=>'span1')); ?>
			
		<div class="control-group">
		    <?php echo $form->labelEx($model,'thumb_image_path', array('class'=> "control-label")); ?>
		    <div class="controls">
		    	<span class="text_require_image"><?php echo Constants::$text_require_image;?></span><br>
		 		<?php echo CHtml::activeFileField($model,'thumb_image_path'); ?>
				<?php //echo $form->fileField($model,'thumb_image_path'); ?>
				<span class="help_inline" style="float: left; margin-left: 200px;">
					<?php //echo $form->error($model,'thumb_image_path'); ?>
				</span>	
			</div>
			<div class="controls"><br>
				<?php 
					if($model->isNewRecord != '1')
						echo CHtml::image(Yii::app()->request->baseUrl . News::image_url . $model->thumb_image_path,"",array("class"=>'show_image_update'));
				?>	
			</div>	
		</div>	
	
		<?php echo $form->labelEx($model,'list_file_attach', array('class'=> "control-label")); ?>
	    <div class="controls">
	        <?php
	        $this->widget('CMultiFileUpload', array(
	                          'model'=>$model,
	                          'attribute'=>'list_file_attach',
	                         // 'accept'=>'doc|pdf|docx',
	                          'max'=> 6,
	                          'options'=>array(
	                            // 'onFileSelect'=>'function(e, v, m){ alert(""onFileSelect - ""+v) }',
	                             //'afterFileSelect'=>'function(e, v, m){ alert(""afterFileSelect - ""+v) }',
	                             // 'onFileAppend'=>'function(e, v, m){ alert(""onFileAppend - ""+v) }',
	                             // 'afterFileAppend'=>'function(e, v, m){ alert(""afterFileAppend - ""+v) }',
	                             //'onFileRemove'=>'function(e, v, m){ alert(""onFileRemove - ""+v) }',
	                             // 'afterFileRemove'=>'function(e, v, m){ alert(""afterFileRemove - ""+v) }',
	                          ),
			));
			?>
	    </div>

<h5>TỪ KHÓA</h5> 
		<?php echo $form->textAreaRow($modelKeyword,'keyword',array('rows'=>1, 'cols'=>50, 'class'=>'span4')); ?>
		<?php echo $form->textAreaRow($modelKeyword,'keyword_eng',array('rows'=>1, 'cols'=>50, 'class'=>'span4')); ?>
		
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
		        'url'=>'../../news/admin',
		      ));
		    } 
		    ?>
		</div>	
	</div>

<?php $this->endWidget(); ?>



