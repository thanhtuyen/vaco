<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
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

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
