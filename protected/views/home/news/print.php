<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print"/>
  <style>
    .gt_coltwo {
      float:left;
      margin-left:2%;
      margin-right:2%;
      background-color:#fff;
      padding-bottom:10px;
    }
    .tit_blue_news {
      color:#0468D8;
      float:left;
      font-family:'Times New Roman', Times, serif;
      font-size:145%;
      font-weight:bold;
      line-height:20px;
      margin-bottom:10px;
      margin-top:12px;
      text-transform:uppercase;
    }
    .sharesoci {
      float:left;
      margin-top:12px;
      text-align:right;
      width:27%;
    }
    .conten_news {
      clear:left;
      font-size:110%;
      padding-bottom:20px;
      text-align:justify;
    }

  </style>
</head>

<body>
<a class="noprint" rel="nofollow" onclick="window.print();return false;"><img src="/images/front/pr.png" border=0 width="20" height="20" title =”In bài viết này” ></a>
<div class="gt_coltwo">
  <div class="tit_blue_news">
    <?php
    if(Yii::app()->language == "en"){
      echo CHtml::decode($model->title_eng);
    } else{
      echo CHtml::decode($model->title);
    }

    ?> </div>
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
</div>
</body>
</html>
