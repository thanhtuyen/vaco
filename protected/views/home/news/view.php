<?php
/* @var $this NewsController */
/* @var $model News */
if(Yii::app()->language == "en"){
  $news = $model->menu->menu_name_eng;
  $title = $model->title_eng;
} else{
  $news = $model->menu->menu_name;
  $title = $model->title;
}
$this->breadcrumbs=array(
  $news=>array('list'),
  $news=>array('list'),
  $title,
);
?>

<div class="gt_coltwo">
  <div class="tit_blue_news">
    <?php
    if(Yii::app()->language == "en"){
      echo CHtml::decode($model->title_eng);
    } else{
      echo CHtml::decode($model->title);
    }

    ?> </div>
  <div class="sharesoci">
    <a href="#"><img src="/images/front/fb.png"></a> 
    <a href="#"><img src="/images/front/tw.png"></a>  
    <a href="#"><img src="/images/front/gc.png"></a>  
    <a href="<?php echo Yii::app()->urlManager->createUrl('/news/admin')?>" onclick="window.open(this.href,'win2','width=400,height=350,menubar=yes,resizable=yes'); return false;"><img src="/images/front/em.png"></a>  
    <a onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" title="In" href="<?php echo Yii::app()->urlManager->createUrl('/news/print', array("id"=>$model->id))?>"><img src="/images/front/pr.png"></a></div>

  <div class="conten_news">
    <!--    <div class="text_bold">-->
    <!--      Mặc cho tình hình kinh tế ảm đạm đến mức nào, giá trị thương hiệu của các nhà bán lẻ hàng đầu thế giới vẫn không ngừng gia tăng. Điều này cho thấy khả năng chống đỡ của họ trước khủng hoảng là không hề nhỏ. Đó là thành quả của những chiến lược thông minh và đặc biệt là những nỗ lực không mệt mỏi.-->
    <!--    </div>-->
    <!--    <br />-->
    <div class="news_text_nomal">
      <?php
      if(Yii::app()->language == "en"){
        echo CHtml::decode($model->detail_eng);
      } else{
        echo CHtml::decode($model->detail);
      }
      ?>

    </div>
  </div>
  <div class="tit_lqnews">Tin LIÊn QUAN:</div>
  <?php foreach($listNews as $news){
    echo '<div class="li_news">'.CHtml::link((Yii::app()->language == "en") ? $news->title_eng : $news->title, Yii::app()->urlManager->createUrl('/news/view', array("id"=>$news->id))).'</div>';
  }
  ?>

</div>
<!-- END CONTENT -->
<!-- BEGIN RIGHT COLUM -->
<div class="gt_colthree">
  <div class="tit_add">Văn phòng đại diện</div>
  <div class="address">
    <strong>Trụ sở chính:</strong><br />Tầng 4, số 168 Đường Láng, Quận Đống Đa, Hà Nội<br />Điện thoại: (84-4) 3 577 0781<br />Fax: +(84-4) 3 577 0787
  </div>
  <div class="address">
    <strong>Chi nhánh Hải Phòng:</strong><br />Số 499 Quán Toan, Quận Hồng Bàng, TP Hải Phòng<br />Điện thoại: 031. 3534655<br />Fax: 031. 3534 316
  </div>
  <div class="tit_video">Video Clip</div>
  <div class="video"><img src="images/video.jpg" width="100%"></div>
</div>
<!-- END RIGHT COLUM -->