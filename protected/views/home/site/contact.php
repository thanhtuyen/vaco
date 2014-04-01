<?php $language = Yii::app()->language;?>
<!-- BEGIN MAP -->
	<div class="map">
    	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/front/map.jpg" alt="map" width="100%">
    </div>
<!-- END MAP -->

<!-- BEGIN LEFT MENU -->
<?php 	
	$id = '';
	if (isset($_GET['id']))
		$id = $_GET['id'];
	echo $this->renderPartial('/layouts/menu_left', array('id' => $id)); 
?>
<!-- END LEFT MENU -->
<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ($language == "en") ? ' - Contact Us' : 'Liên Hệ';
$this->breadcrumbs=array(
  ($language == "en") ? 'Contact' : 'Liên Hệ',
);

?>
<!-- BEGIN CONTENT -->
<div class="gt_coltwo">
  <div class="tit_blue">Liên  Hệ Công ty kiểm toán vaco</div>
  <div class="contact_add">
    <strong>Trụ sở chính:</strong><br />
    Tầng 4, số 168 Đường Láng, Quận Đống Đa, Hà Nội<br />
    Điện thoại: (84-4) 3 577 0781<br />
    Fax: +(84-4) 3 577 0787<br />
    <br />
    <strong>Chi nhánh Hải Phòng:</strong><br />
    Số 499 Quán Toan, Quận Hồng Bàng, TP Hải Phòng<br />
    Điện thoại: 031. 3534655<br />
    Fax: 031. 3534 316<br />
    <br />
    <strong>Gửi thông điệp đến chúng tôi:</strong><br />
    <?php $form=$this->beginWidget('CActiveForm'); ?>
    <?php if(app()->user->hasFlash('contact')){
      echo '<div class="alert alert-success" style="font-size:17px">'.app()->user->getFlash('contact').'</div>';
    }?>
<!--    <p class="note">Fields with <span class="required">*</span> are required.</p>-->
    <div class="error" style="color: red">
    <?php echo $form->errorSummary($model); ?>
    </div>
    <div class="form_lh">
      <div class="lh_label">Tên bạn<span style="color: red"> *</span>:</div>
      <div class="lh_input"><?php echo $form->textField($model,'name'); ?></div>
      <div class="lh_label">Địa chỉ Email<span style="color: red"> *</span>:</div>
      <div class="lh_input"><?php echo $form->textField($model,'email'); ?></div>
      <div class="lh_label">Tiêu đề thông điệp<span style="color: red"> *</span>:</div>
      <div class="lh_input"><?php echo $form->textField($model,'subject'); ?></div>
      <div class="lh_label">Nội dung thông điệp<span style="color: red"> *</span>:</div>
      <div class="lh_input"><?php echo $form->textArea($model,'body', array('rows'=>5, 'cols'=>60, 'class'=>'span5')); ?></div>
      <div class="lh_checkbox"> <?php echo $form->checkBox($model,'copy'); ?> Gởi một bản copy thông điệp này đến email của bạn</div>

<!--      <div class="row">-->
<!--        --><?php //echo $form->labelEx($model,'name'); ?>
<!--        --><?php //echo $form->textField($model,'name'); ?>
<!--      </div>-->
<!---->
<!--      <div class="row">-->
<!--        --><?php //echo $form->labelEx($model,'email'); ?>
<!--        --><?php //echo $form->textField($model,'email'); ?>
<!--      </div>-->
<!---->
<!--      <div class="row">-->
<!--        --><?php //echo $form->labelEx($model,'subject'); ?>
<!--        --><?php //echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
<!--      </div>-->
<!---->
<!--      <div class="row">-->
<!--        --><?php //echo $form->labelEx($model,'body'); ?>
<!--        --><?php //echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
<!--      </div>-->
<!--      <div class="row">-->
<!--        --><?php //echo $form->labelEx($model,'copy'); ?>
<!--        --><?php //echo $form->checkBox($model,'copy'); ?>
<!--      </div>-->
      <div class="lh_sent">
        <?php echo CHtml::submitButton('Gửi'); ?>
      </div>
    </div>
    <?php $this->endWidget(); ?>
<!--    <div class="form_lh">-->
<!--      <div class="lh_label">Tên bạn:</div>-->
<!--      <div class="lh_input"><input name="" type="text" /></div>-->
<!--      <div class="lh_label">Địa chỉ Email:</div>-->
<!--      <div class="lh_input"><input name="" type="text" /></div>-->
<!--      <div class="lh_label">Tiêu đề thông điệp:</div>-->
<!--      <div class="lh_input"><input name="" type="text" /></div>-->
<!--      <div class="lh_label">Nội dung thông điệp:</div>-->
<!--      <div class="lh_textarea"><textarea name="" cols="" rows="6"></textarea></div>-->
<!--      <div class="lh_checkbox"><input name="" type="checkbox" value="" /> Gởi một bản copy thông điệp này đến email của bạn</div>-->
<!--      <div class="lh_sent"><a href="#"><input name="" type="button" value="Gởi" /></a></div>-->
<!--    </div>-->
  </div>
</div>
</div>

<!-- BEGIN RIGHT COLUM -->
	<?php require 'menu_right_address.php'; ?>
<!-- END RIGHT COLUM -->