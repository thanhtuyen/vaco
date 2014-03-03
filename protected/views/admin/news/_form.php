<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'news-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>
	
	<div class="space5">  
		<div class="control-group">
			<?php echo $form->labelEx($model,'menu_id', array('class'=> "control-label")); ?>
		    <div class="controls">	
				<?php $data= CHtml::listData(Menu::model()->findAll(array('condition'=>'del_flg=0')), 'id', 'menu_name');
					$this->widget('ext.EchMultiSelect.EchMultiSelect', array(
					    'model' => $model,
					    'dropDownAttribute' => 'menu_id',     
					    'data' => $data,
					    'dropDownHtmlOptions'=> array(
							'class'=>'span-10',
					    	'style'=>'width:150px;',
					    ),
					    'options' => array( 
					        'header'=> Yii::t('EchMultiSelect.EchMultiSelect',Constants::$listLabelButton['choose_option']),
					        'minWidth'=>200,
					        //'position'=>array('my'=>'left bottom', 'at'=>'left top'),
					        'filter'=>true,
					    	'selectedList'=>false,
					    	'autoOpen'=>false,
					    	'placeholder'=>Yii::t('EchMultiSelect.EchMultiSelect','Nhập từ khóa'),
							'autoReset'=>false,
					    ),
					    'filterOptions'=> array(
					        'width'=>150,
					    ),
					));?>
			</div>
		</div>
		<?php //echo $form->dropDownListRow($model,'menu_id', CHtml::listData(Menu::model()->findAll(array('condition'=>'del_flg=0')),'id','menu_name'), array('prompt'=>'Select one item...')); ?>
	
		<?php echo $form->textFieldRow($model,'title',array('class'=>'span3','maxlength'=>255)); ?>
	
		<?php echo $form->textAreaRow($model,'caption',array('rows'=>6, 'cols'=>50)); ?>
	
		<?php echo $form->textAreaRow($model,'detail',array('rows'=>6, 'cols'=>50)); ?>
		<h5>ENGLISH</h5>
		<?php echo $form->textFieldRow($model,'title_eng',array('size'=>45,'maxlength'=>45)); ?>
	
		<?php echo $form->textAreaRow($model,'caption_eng',array('rows'=>6, 'cols'=>50)); ?>
	
		<?php echo $form->textAreaRow($model,'detail_eng',array('rows'=>6, 'cols'=>50)); ?>
	
		<div class="control-group">
		    <?php echo $form->labelEx($model,'thumb_image_path', array('class'=> "control-label")); ?>
		    <div class="controls">
		 		<?php echo CHtml::activeFileField($model,'thumb_image_path'); ?>
				<?php //echo $form->fileField($model,'image_path'); ?>
				<span class="help_inline" style="float: left; margin-left: 200px;">
					<?php //echo $form->error($model,'image_path'); ?>
				</span>	
				<?php 
					if($model->isNewRecord != '1')
						echo CHtml::image(Yii::app()->request->baseUrl . Imageslide::image_url . $model->image_path,"thumb_image_path",array("width"=>100));
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
