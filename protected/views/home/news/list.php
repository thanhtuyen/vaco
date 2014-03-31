<!-- BEGIN LEFT MENU -->
<?php 	
	$id = '';
	if (isset($_GET['id_menu']))
		$id = $_GET['id_menu'];
	echo $this->renderPartial('/layouts/menu_left', array('id' => $id)); 
?>
<!-- END LEFT MENU -->
<?php
$this->breadcrumbs=array(
  //'Tin tức'=>array('index'),
  $menu_name,
);?>
<?php $language = Yii::app()->language;?>
  <!-- BEGIN CONTENT -->
  <div class="gt_coltwo">
    <div class="tit_blue"><?php echo $menu_name;?></div>
    <?php
    if (!empty($items)) {
      foreach ($items as $item) {

        echo'<div class="bonews">';
        if(Yii::app()->language == "en"){
          echo '<div class="tit_news">'.CHtml::decode($item->title_eng).'</div>';
          echo '<div class="depc">'.CHtml::decode($item->caption_eng).'</div>';
        } else {
          echo '<div class="tit_news">'.CHtml::decode($item->title).'</div>';
          echo '<div class="depc">'.CHtml::decode($item->caption).'</div>';
        }
        echo '<div class="readmore">'.CHtml::link((Yii::app()->language == "en") ? 'See more...' : 'Xem tiếp', News::model()->getUrl($item->id, $menu_name, ($language == "en") ? $item->title_eng : $item->title)).'</div>';
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
  <?php echo $this->renderPartial('/site/menu_right_address'); ?>
  <!-- END RIGHT COLUM -->
