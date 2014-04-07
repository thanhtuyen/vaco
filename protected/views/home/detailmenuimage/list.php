<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/smoothzoom.css" />
<!-- BEGIN LEFT MENU -->
<?php
	$id = '';
	if (isset($_GET['id']))
		$id = $_GET['id'];
	echo $this->renderPartial('/layouts/menu_left', array('id' => $id));
?>
<!-- END LEFT MENU -->
<?php
$this->breadcrumbs=array(
  //'Tin t?c'=>array('index'),
  $menu_name,
);?>
<?php $language = Yii::app()->language;?>
<!-- BEGIN CONTENT -->
<div class="gt_coltwo">
  <div class="tit_blue"><?php echo $menu_name;?></div>
  <div class="list-image">
  <?php
  if (!empty($items)) {
    foreach ($items as $item) {
    $image = CHtml::image(Yii::app()->request->baseUrl.Detailmenuimage::image_url .$item->image_path,$item->caption, array('rel' => 'zoom'));
      echo' <div class="image">';
        if(Yii::app()->language == "en"){
          echo '<div class="image_child float-left" >'.$image.'</div>';
          echo '<div class="caption" >'.$item->caption_eng.'</div>';
        } else {
          echo '<div class="image_child float-left">'.$image.'</div>';
          echo '<div class="caption" >'.$item->caption.'</div>';
        }
      echo '</div>';
    }
  }
  ?>
  </div>
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
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/ajax_jquery.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/easing.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/smoothzoom.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/smoothzoom.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(window).load( function() {
    $('img').smoothZoom({
      // Options go here
    });
  });
</script>
