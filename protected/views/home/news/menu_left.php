<!-- BEGIN LEFT MENU -->

  <div class="tit_menuleft"><span class="text_title_lm"><a href="#">Tin Tức</a></span></div>
  <div class="leftmenu">
    <?php
    $sub_menu = HomeController::getListParentMenuSortPriority(3);
    foreach($sub_menu as $sm){
      echo '<div class="tx_leftmenu">'.CHtml::link($sm->menu_name, yii::app()->urlManager->createUrl('news/list',array( 'id' => $sm->id))).'</a></div>';
    }
    ?>
<!--    <div class="tx_leftmenu" id="lm_active"><a href="#">Tin thời sự</a></div>-->
<!--    <div class="tx_leftmenu"><a href="#">Tin VACO</a></div>-->
<!--    <div class="tx_leftmenu"><a href="#">Thông cáo báo chí</a></div>-->
<!--    <div class="tx_leftmenu"><a href="#">Quy định mới</a></div>-->
  </div>

  <div class="vacoprofile">
    <div class="tit_profile"><a href="#">VACO Profile</a></div>
    <div class="img_profile"><a href="#"><img src="images/img_profile.png" width="100%"></a></div>
  </div>