<?php echo $this->renderPartial('/layouts/menu_left', array('id' => $model->menu_id)); ?>
<?php
/* @var $this NewsController */
/* @var $model News */
$model_menu = Menu::model()->findByPk($model->menu_id); 
if(Yii::app()->language == "en"){
  $news = $model_menu['menu_name_eng'];
  $menu_eng = $news;
  $title = $model->title_eng;
} else{
  $news = $model_menu['menu_name'];
  $menu_name = $news;
  $title = $model->title;
}
$this->breadcrumbs=array(
  $news=>array(Detailmenu::model()->getUrl($model->menu_id, (Yii::app()->language == "en") ? $menu_eng : $menu_name)),
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
  <div style="float: right;" class="icon">
    <div  style="float: left;margin-right: 10px; margin-top: 2px;" class="fb-share-button" data-href="<?php echo $_SERVER['HTTP_HOST'].Yii::app()->request->url ;?>" data-type="icon"></div>
    <div class="sharesoci">
      <a href="#"><img style="width: 14px; " src="/images/front/tw.png"></a>  
      <a href="#"><img  style="width: 20px;" src="/images/front/gc.png"></a>  
      <!--      <a href="#"><img src="/images/front/em.png"></a>  -->
      <!--      <a onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" title="In" href="--><?php //echo Yii::app()->urlManager->createUrl('/news/print', array("id"=>$model->id))?><!--"><img src="/images/front/pr.png"></a>-->
    </div>
  </div>

  <div class="conten_news">
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

</div>
<!-- END CONTENT -->

<!-- BEGIN RIGHT COLUM -->
<?php echo $this->renderPartial('/site/menu_right_address'); ?>
<!-- END RIGHT COLUM -->