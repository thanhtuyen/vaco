<!-- BEGIN LEFT MENU -->
<?php
	$id = '';
	if (isset($_GET['id']))
		$id = $_GET['id']; 	          		
?>
<?php 
	$current_menu_info = Menu::model()->getMenuInfoId($id);
	if($current_menu_info->parent_menu_id != 0){ // list sub menu with together parent_id
		$list_menu_left = HomeController::getListParentMenuSortPriority($current_menu_info->parent_menu_id);
		$info_parent_menu = Menu::model()->getMenuInfoId($current_menu_info->parent_menu_id);
	} else { // list sub menu with curent_menu
		$list_menu_left = HomeController::getListParentMenuSortPriority($id);
		$info_parent_menu = Menu::model()->getMenuInfoId($id);
	}
?>
<div class="gt_colone">
  <div class="tit_menuleft"><span class="text_title_lm"><a href="#"><?php echo (Yii::app()->language == "en") ? $info_parent_menu->menu_name_eng : $info_parent_menu->menu_name; ?></a></span></div>
  <div class="leftmenu">
  	<?php 
	  	foreach ($list_menu_left as $lm_left) { 
	  		echo '<div class="tx_leftmenu" id='.$lm_left->id.'>'.CHtml::link((Yii::app()->language == "en") ? $lm_left->menu_name_eng : $lm_left->menu_name, Yii::app()->urlManager->createUrl('#')).'</div>';
	  	}
  	?>
  </div>

  <div class="vacoprofile">
    <div class="tit_profile"><a href="#">VACO Profile</a></div>
    <div class="img_profile"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/front/img_profile.png" width="100%"></a></div>
  </div>
</div>
