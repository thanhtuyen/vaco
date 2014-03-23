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

<!-- BEGIN CONTENT -->	
	<!-- News left -->
	<?php $list_menu_left = News::model()->getMenuForHome(Menu::LIST_MENU, 0, 2);  ?>
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
        
        <div class="coltwo">
        	<div class="tittle"><h3>Giới thiệu Vaco</h3><span class="unline"></span></div>
            <div class="bocontentgt">
            	<p>Công ty TNHH Kiểm toán VACO (VACO) là một trong những hãng kiểm toán hàng đầu tại Việt Nam cung cấp dịch vụ chuyên ngành kiểm toán, tư vấn tài chính, kế toán, thuế, đào tạo và quản lý nguồn nhân lực cho tất cả các khách hàng thuộc mọi thành phần kinh tế hoạt động tại Việt Nam.</p>
                <p>Với đội ngũ nhân viên chuyên nghiệp được đào tạo có hệ thống tại các trường Đại học danh tiếng trong và ngoài nước, có trình độ chuyên môn sâu và kinh nghiệm thực tiễn phong phú trong các lĩnh vực chuyên ngành, đồng thời am hiểu sâu sắc hệ thống pháp luật hiện hành về Kiểm toán, kế toán, tài chính, thuế, đầu tư tại Việt Nam, cũng như nắm vững các chuẩn mực nghề nghiệp của Việt Nam và quốc tế.</p>
                <div class="imggt"><img src="images/front/imggt.jpg"></div>
                <div class="readmore"><a href="#"><a href="#"><?php echo ($language=="en") ? 'See more' : 'Xem tiếp'; ?></a></div>
            </div>
            <div class="newsother">
            	<a href="#"><span class="arrow"><img src="images/front/arrow.png"></span><span class="newsoth">Các tin bài viết về Vaco</span></a>
            </div>
        </div>
        
        <!-- News right -->
        <?php $list_menu_right = News::model()->getMenuForHome(Menu::LIST_MENU, 0, 1);  ?>
        <div class="colthree">
        	<?php foreach ($list_menu_right as $list_menu_right){ ?>
        		<div class="tittle"><h3><h3><?php echo ($language=="en") ? $list_menu_right->menu_name_eng : $list_menu_right->menu_name; ?></h3><span class="unline"></span></div>
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
        
		<div class="colfour">
        	<div class="tittle"><h3>Website liên kết</h3><span class="unline"></span></div>
            <div class="weblink">
            	<ul>
                	<li><a href="#">Bộ Tài chính</a></li>
                    <li><a href="#">HLB International</a></li>
                    <li><a href="#">Công ty TNHH Tư vấn VACO</a></li>
                    <li><a href="#">Cộng sự (VACO)</a></li>
                    <li><a href="#">Hội Kiểm toán viên hành nghề Việt Nam</a></li>
                    <li><a href="#">Hội Kế toán và Kiểm toán</a></li>
                    <li><a href="#">Việt Nam - VAA</a></li>
                    <li><a href="#">Hội Tư vấn Thuế (VTCA)</a></li>
                    <li><a href="#">Hội Thẩm định giá Việt Nam (VVA)</a></li>
                    <li><a href="#">Hội Tư vấn Thuế (VTCA)</a></li>
                    <li><a href="#">Hội Thẩm định giá Việt Nam (VVA)</a></li>
                </ul>
            </div>
            <div class="tittle"><h3>Video clip</h3><span class="unline"></span></div>
            <div class="video"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/front/video.jpg" width="100%"></div>
        </div>
    </div>
<!-- END CONTENT -->
