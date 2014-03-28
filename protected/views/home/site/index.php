<?php
/* @var $this SiteController */
/* home */
?>

<!-- BEGIN SLIDE SHOW -->
<?php
$language = Yii::app()->language;
$image_slide_list = Imageslide::model()->getImageSlideList();
?>
<section class="wrap slider">
  <div class="container">
    <div id="lofass223" class="lof-ass">
      <div class="lofass-container  lof-css3">
        <!-- BEGIN CONTENT SLIDE SHOW -->
        <div class="lof-main-wapper">
          <?php foreach ($image_slide_list as $imgList) { ?>
            <div class="lof-main-item ">
              <?php echo CHtml::image(Yii::app()->request->baseUrl . Imageslide::image_url . $imgList->image_path); ?>
              <div class="lof-description">
                <h4><a href="#"><?php echo ($language == "en") ? $imgList->title_eng : $imgList->title ?></a></h4>
                <p><?php echo ($language == "en") ? $imgList->caption_eng : $imgList->caption; ?></p>
              </div>
            </div>
          <?php } ?>
        </div>
        <!-- END CONTENT SLIDE SHOW -->
        <!-- BEGIN NAVIGATOR -->
        <div class="lof-buttons-control">
          <a href="#" onClick="return false;" class="lof-previous">Previous</a>
          <a href="#" class="lof-next" onClick="return false;">Next</a>
        </div>
        <!-- END NAVIGATOR -->
      </div>
    </div>
  </div>
</section>
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
<!-- END SLIDE SHOW -->

<!-- BEGIN CONTENT -->
<!-- News left -->
<?php $list_menu_left = News::model()->getMenuForHome(Menu::LIST_MENU, 0, 3);  ?>
<div class="container"><div class="mt1"></div>
  <div class="colone">
    <?php foreach ($list_menu_left as $lm_left){ ?>
      <div class="tittle"><h3><?php echo ($language=="en") ? $lm_left->menu_name_eng : $lm_left->menu_name; ?></h3><span class="unline"></span></div>
      <?php
      $list_news_left = News::model()->getListNews($lm_left->id);
      foreach ($list_news_left as $ln_left){ ?>
        <div class="bocontent">
          <div class="news"><a href="#"><?php echo ($language=="en") ? $ln_left->title_eng : $ln_left->title; ?></a></div>
          <div class="readmore"><a href="#"><a href="#"><?php echo ($language=="en") ? 'See more' : 'Xem tiếp'; ?></a></div>
        </div>
      <?php } ?>
    <?php } ?>
  </div>

  <!-- News center -->
  <?php $list_menu_center = News::model()->getMenuForHome(Menu::LIST_MENU, 0, 2);  ?>
  <div class="coltwo">
    <?php foreach ($list_menu_center as $lm_center){ ?>
      <div class="tittle"><h3><?php echo ($language=="en") ? $lm_center->menu_name_eng : $lm_center->menu_name; ?></h3><span class="unline"></span></div>
      <?php
      $list_news_center = News::model()->getListNews($lm_center->id);
      foreach ($list_news_center as $ln_center){ ?>
        <div class="bocontentgt">
          <p><?php echo ($language=="en") ? $ln_center->caption_eng : $ln_center->caption; ?></p>

          <?php if($ln_center->thumb_image_path != ''):?>
            <div class="imggt">
              <?php echo CHtml::image(Yii::app()->request->baseUrl . News::image_url . $ln_center->thumb_image_path,""); ?>
            </div>
          <?php endif; ?>

          <div class="readmore"><a href="#"><a href="#"><?php echo ($language=="en") ? 'See more' : 'Xem tiếp'; ?></a></div>
        </div>
      <?php } ?>
    <?php } ?>

    <?php
    $num_news_center = count($list_menu_center);
    if($num_news_center > 0){
      ?>
      <div class="newsother">
        <a href="#">
          <span class="arrow"><?php echo CHtml::image(Yii::app()->request->baseUrl . 'images/front/arrow.png',""); ?></span>
          <span class="newsoth">Các bản tin viết về Vaco</span>
        </a>
      </div>
    <?php } ?>
  </div>

  <!-- News right -->
  <?php $list_menu_right = News::model()->getMenuForHome(Menu::LIST_MENU, 0, 1);  ?>
  <div class="colthree">
    <?php foreach ($list_menu_right as $list_menu_right){ ?>
      <div class="tittle"><h3><?php echo ($language=="en") ? $list_menu_right->menu_name_eng : $list_menu_right->menu_name; ?></h3><span class="unline"></span></div>
      <?php
      $list_news_right = News::model()->getListNews($list_menu_right->id);
      $num_record = count($list_menu_right);
      $num_current = 0;
      foreach ($list_news_right as $ln_right){ $num_current++; ?>
        <div class="bocontent">
          <div class="news"><?php echo ($language=="en") ? $ln_right->caption_eng : $ln_right->caption; ?></div>
          <div class="readmore"><a href="#"><?php echo ($language=="en") ? 'See more' : 'Xem tiếp'; ?></a></div>
          <?php if($num_record > $num_current):?>
            <div class="linengn"></div>
          <?php endif; ?>
        </div>
      <?php } ?>
    <?php } ?>
  </div>

  <?php echo $this->renderPartial('/layouts/menu_right'); ?>

</div><!-- End div container -->
<!-- END CONTENT -->
