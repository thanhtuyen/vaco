<!-- ACTIVE MENU IN NEWS -->
<?php 
	$id = '';
	  if (isset($_GET['id']))
	    $id = $_GET['id'];
	$news_info = News::model()->getNews($id);
	$sub_menu = Menu::model()->getMenuInfoId($news_info->menu_id); 
	if($sub_menu != ''){
		$sub_menu_id = $sub_menu->id;
		$parent_menu_id = $sub_menu->parent_menu_id;
?>
		<script type="text/javascript">
			$( document ).ready(function() {
				$('#'+<?php echo $sub_menu_id;?>).addClass('lm_active');
           		$('#'+<?php echo $parent_menu_id;?>).addClass('active');
        	});
 		</script>
<?php } ?>
<!-- BEGIN LEFT MENU -->
<?php echo $this->renderPartial('/layouts/menu_left', array('id' => $model->menu_id)); ?>
<!-- END LEFT MENU -->
<?php $language = Yii::app()->language;?>
<?php
/* @var $this NewsController */
/* @var $model News */
$model_menu = Menu::model()->findByPk($model->menu_id);
if(Yii::app()->language == "en"){
  $news = $model_menu['menu_name_eng'];
  $menu_name = $news;
  $title = $model->title_eng;
} else{
  $news = $model_menu['menu_name'];
  $menu_name = $news;
  $title = $model->title;
}
$this->breadcrumbs=array(
  $news=>array(News::model()->getUrl($model->menu_id, $menu_name)),
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
  <div class="tit_lqnews">TIN LIÊN QUAN:</div>
  <?php foreach($listNews as $news){  	
    echo '<div class="li_news">'.CHtml::link(($language == "en") ? $news->title_eng : $news->title, News::model()->getUrl($news->id, $menu_name, ($language == "en") ? $news->title_eng : $news->title)).'</div>';
  }
  ?>

</div>
<!-- END CONTENT -->

<!-- BEGIN RIGHT COLUM -->
<?php echo $this->renderPartial('/site/menu_right_address'); ?>
<!-- END RIGHT COLUM -->