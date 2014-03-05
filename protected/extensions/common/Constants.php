<?php
define('ROOT_PATH', str_replace('/protected', '', Yii::app()->basePath));


class Constants {
	public static $arrayIsPublic = array('0'=>'Công khai',
								'1'=>'Không công khai');
	/*
	 * List module menu
	 */	 
	public static $listModule = array(
		'image_slide' 		=> array(	'title' => 'Quản lý ImageSlide', 
										'url' => array('/imageslide/admin'), 
										'header' => 'IMAGESLIDE'),
		'news' 				=> array(	'title' => 'Quản lý Tin Tức', 
										'url' => array('/news/admin'), 
										'header' => 'TIN TỨC'),

	);
	
	/*
	 * List module menu
	 */	 
	public static $listTitleForm = array(
		'form_create' 	=> 'Tạo mới ###TITLE###', 		
		'form_update' 	=> 'Chỉnh sửa ###TITLE###', 
		'form_view' 	=> 'Chi tiết ###TITLE###', 		
	);

	/*
	 * Define message
	 */	
	public static $listMessage = array(
		'no_data' 			=> '###TITLE### không có dữ liệu',
		'max_length' 		=> '###TITLE### cho phép nhập tối đa ###NUMBER### ký tự',
		'required'			=> '###TITLE### không được rỗng',
		'numerical'			=> 'Nhập ký tự số',
		'wrongTypeImage'	=> 'Tải hình ảnh với định dạng jpg, gif, png',
		'wrongTypeFile'		=> 'Tải tập tin với định dạng doc, pdf, docx',
		'tooLarge'			=> 'Tải tập tin không quá ###NUMBER###MB',
	);
	
	/*
	 * Define label button
	 */
	public static $listLabelButton = array(
		'search' 			=> 'Tìm kiếm',
		'create'			=> 'Tạo mới',
		'update'			=> 'Lưu',
		'reset'				=> 'Làm mới',
		'cancel'			=> 'Thoát',
		'choose_option'		=> 'Chọn loại menu!',
	);
	
	/*
	 * Define text required for form admin
	 */	
	public static $text_required = 'Trường có dấu <span class="required">*</span> là bắt buộc.';

}
?>