<!-- BEGIN LEFT MENU -->
<?php 	
	$id = '';
	if (isset($_GET['id']))
		$id = $_GET['id'];
	echo $this->renderPartial('/layouts/menu_left', array('id' => $id)); 
?>
<!-- END LEFT MENU -->
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Thanh Tuyen
 * Date: 3/27/14
 * Time: 10:54 PM
 * To change this template use File | Settings | File Templates.
 */
