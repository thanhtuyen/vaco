<!-- VIDEO -->

  <div class="video">
    <video width="225" height="203" id="player2" controls="controls">
      <source src="<?php echo Yii::app()->request->baseUrl; ?>/media/vaco.mp4" type="video/mp4">
    </video>
    <script type="text/javascript">
		$( document ).ready(function() {
      		$('audio,video').mediaelementplayer({ });
		});
    </script>
    <!-- AUDIO -->
	  <script src="https://www.google.com/jsapi"></script>
	  <script type="text/javascript">
	    google.load("language", "1");
	  </script>
	  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/build/jquery.js"></script>
	  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/build/mediaelement-and-player.min.js"></script>
	  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/build/mediaelementplayer.min.css" />
  
  </div>
    
