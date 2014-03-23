<?php
$this->breadcrumbs=array(
  'Tin tức'=>array('index'),
  $menu_name,
);?>

  <!-- BEGIN CONTENT -->
  <div class="gt_coltwo">
    <div class="tit_blue"><?php echo $menu_name;?></div>
    <?php
    if (!empty($items)) {
      foreach ($items as $item) {
        echo'<div class="bonews">';
        echo '<div class="tit_news">'.$item->title.'</div>';
        echo '<div class="depc">'.CHtml::decode($item->detail).'</div>';
        echo '<div class="readmore">Xem tiếp</div>';
        echo '</div>';
      }
    }
    ?>

    <div class="pagesub">
      <?php $this->widget('CLinkPager', array(
        'pages'       => $pages,
        'htmlOptions' => array('class' => 'pager'),
        'header'      => ''
      ));
      ?>
    </div>
<!--    <div class="pagesub">-->
<!--      <a href="#"><span class="first"></span></a>-->
<!--      <a href="#"><span class="pre"></span></a>-->
<!--      <a href="#"><span class="numpage">1</span></a>-->
<!--      <a href="#"><span class="numpage">2</span></a>-->
<!--      <a href="#"><span class="numpage">3</span></a>-->
<!--      <a href="#"><span class="numpage">4</span></a>-->
<!--      <a href="#"><span class="numpage">5</span></a>-->
<!--      <a href="#"><span class="numpage">6</span></a>-->
<!--      <a href="#"><span class="numpage">7</span></a>-->
<!--      <a href="#"><span class="numpage">8</span></a>-->
<!--      <a href="#"><span class="numpage">9</span></a>-->
<!--      <a href="#"><span class="numpage">10</span></a>-->
<!--      <a href="#"><span class="nex"></span></a>-->
<!--      <a href="#"><span class="last"></span></a>-->
<!--    </div>-->

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
    <div class="video"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/front/video.jpg" width="100%"></div>
  </div>
  <!-- END RIGHT COLUM -->

</body>
</html>