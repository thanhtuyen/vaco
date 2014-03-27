<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/search.css" />
<!-- BEGIN BREAK -->
<?php
$this->breadcrumbs=array(
  'Search'=>array('index'),

);
?>
<div class="container">

<?php //echo $this->renderPartial('menu_left.php'); ?>
  <div class="gt_colsearch">
    <script>
      (function() {
        var cx = '013837943323146086010:ppcggvatkxe';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
          '//www.google.com/cse/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
      })();
    </script>
    <gcse:search></gcse:search>
  </div>
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
 </div>
