<?php
$this->breadcrumbs=array(
  'Tin tức'=>array('index'),
  $menu_name,
);?>

  <!-- BEGIN CONTENT -->
  <div class="gt_coltwo">
    <div class="tit_blue"><?php echo $menu_name;?></div>
    <?php
    $language = Yii::app()->language;
    if (!empty($items)) {
      foreach ($items as $item) {

        echo'<div class="bonews">';
        if(Yii::app()->language == "en"){
          echo '<div class="tit_news">'.CHtml::decode($item->title_eng).'</div>';
          echo '<div class="depc">'.CHtml::decode($item->description_eng).'</div>';
        } else {
          echo '<div class="tit_news">'.CHtml::decode($item->title).'</div>';
          echo '<div class="depc">'.CHtml::decode($item->description).'</div>';
        }
        echo '<div class="readmore">'.CHtml::link((Yii::app()->language == "en") ? 'Read more...' : 'Xem tiếp', Yii::app()->urlManager->createUrl('/news/view', array("id"=>$item->id))).'</div>';
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
    <div class="video"><img src="images/front/video.jpg" width="100%"></div>
  </div>
  <!-- END RIGHT COLUM -->
<script type="text/javascript">
  var _lofmain =  $('lofass223');
  var object = new LofArticleSlideshow( _lofmain,
    {
      fxObject:{
        transition:Fx.Transitions.Expo.easeIn,
        duration:500                    },
      startItem:0,
      interval:5000,
      direction :'opacity',
      navItemHeight:85,
      navItemWidth:315,
      navItemsDisplay:4,
      navPos:'0',
      autoStart:1,
      descOpacity:1                  } );
  object.registerButtonsControl( 'click', {next:_lofmain.getElement('.lof-next'),
    previous:_lofmain.getElement('.lof-previous')} );
</script>
