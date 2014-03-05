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
			if($model->isNewRecord != '1')
				echo $form->dropDownListRow($model,'menu_id', Menu::listCategory(), array('prompt'=>'Chọn menu ...')); 
			else {
				echo $form->labelEx($model,'menu_id',array('class'=>'control-label'));?>
				<div class="controls">
					<?php 
					$list_menu = Menu::listCategory();		
					$htmlOptions = array('size' => '5', 'style'=>'width:270px;', 'prompt'=>'Giữ phím CTRL để chọn nhiều menu.', 'multiple' => 'multiple', 'options' => ''); 
	
			        echo $form->ListBox($model,'menu_id', $list_menu, $htmlOptions); ?>
		    	</div>
			<?php } ?>
		</div>
		
		   <?php echo $form->ckEditorRow($model, 'detail', array('class'=>'span3', 'type' => 'raw'));?>
	
		<?php echo $form->textFieldRow($model,'title',array('class'=>'span3','maxlength'=>255)); ?>
	
		<?php echo $form->textAreaRow($model,'caption',array('rows'=>1, 'cols'=>50, 'class'=>'span4')); ?>
	
		<?php echo $form->textAreaRow($model,'detail',array('rows'=>10, 'cols'=>50, 'class'=>'span4')); ?>
		<h5>ENGLISH</h5>
		<?php echo $form->textFieldRow($model,'title_eng',array('size'=>45,'maxlength'=>45)); ?>
	
		<?php echo $form->textAreaRow($model,'caption_eng',array('rows'=>1, 'cols'=>50, 'class'=>'span4')); ?>
	
		<?php echo $form->textAreaRow($model,'detail_eng',array('rows'=>10, 'cols'=>50, 'class'=>'span4')); ?>
	
		<div class="control-group">
		    <?php echo $form->labelEx($model,'thumb_image_path', array('class'=> "control-label")); ?>
		    <div class="controls">
		 		<?php echo CHtml::activeFileField($model,'thumb_image_path'); ?>
				<?php //echo $form->fileField($model,'thumb_image_path'); ?>
				<span class="help_inline" style="float: left; margin-left: 200px;">
					<?php //echo $form->error($model,'thumb_image_path'); ?>
				</span>	
			</div>
			<div class="controls">
				<?php 
					if($model->isNewRecord != '1')
						echo CHtml::image(Yii::app()->request->baseUrl . News::image_url . $model->thumb_image_path,"",array("width"=>100));
				?>	
			</div>	
		</div>	

	
		<?php echo $form->labelEx($model,'listfile_attach', array('class'=> "control-label")); ?>
	    <div class="controls">
	        <?php
	        $this->widget('CMultiFileUpload', array(
	                          'model'=>$model,
	                          'attribute'=>'listfile_attach',
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
