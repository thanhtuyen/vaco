<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Thanh Tuyen
 * Date: 2/28/14
 * Time: 10:51 PM
 * To change this template use File | Settings | File Templates.
 */

/*
 * author: TamEmNTN
 * getMessage
 *
 */
 function getMessage ($messageKey, $title = "", $arrParam=array()) {
	if (!empty($messageKey)) {
		$message = Constants::$listMessage[$messageKey];
		$message = str_replace("###TITLE###", $title, $message);
		$arrParam = is_array($arrParam) ? $arrParam :  array();
		foreach ($arrParam as $k => $v) {
			$k = strtoupper($k);
			$message = str_replace("###$k###", $v, $message);
		}
		return $message;
	}
	return "";
}
/**
 * This is the shortcut to DIRECTORY_SEPARATOR
 */
defined('DS') or define('DS',DIRECTORY_SEPARATOR);

/**
 * This is the shortcut to Yii::app()
 */
function app()
{
  return Yii::app();
}

/**
 * This is the shortcut to Yii::app()->clientScript
 */
function cs()
{
  // You could also call the client script instance via Yii::app()->clientScript
  // But this is faster
  return Yii::app()->getClientScript();
}

/**
 * This is the shortcut to Yii::app()->user.
 */
function user()
{
  return Yii::app()->getUser();
}

/**
 * This is the shortcut to Yii::app()->createUrl()
 */
function url($route,$params=array(),$ampersand='&')
{
  return Yii::app()->createUrl($route,$params,$ampersand);
}

/**
 * This is the shortcut to CHtml::encode
 */
function h($text)
{
  return htmlspecialchars($text,ENT_QUOTES,Yii::app()->charset);
}

/**
 * This is the shortcut to CHtml::link()
 */
function l($text, $url = '#', $htmlOptions = array())
{
  return CHtml::link($text, $url, $htmlOptions);
}

/**
 * This is the shortcut to Yii::t() with default category = 'stay'
 */
function t($message, $category = 'stay', $params = array(), $source = null, $language = null)
{
  return Yii::t($category, $message, $params, $source, $language);
}

/**
 * This is the shortcut to Yii::app()->request->baseUrl
 * If the parameter is given, it will be returned and prefixed with the app baseUrl.
 */
function bu($url=null)
{
  static $baseUrl;
  if ($baseUrl===null)
    $baseUrl=Yii::app()->getRequest()->getBaseUrl();
  return $url===null ? $baseUrl : $baseUrl.'/'.ltrim($url,'/');
}

/**
 * Returns the named application parameter.
 * This is the shortcut to Yii::app()->params[$name].
 */
function param($name)
{
  return Yii::app()->params[$name];
}

/**
 * Returns the value of input
 */
function null($input)
{
  return ($input != NULL || $input!='')? $input : " -- ";
}
/**
 * Returns the value of input
 */
function clear($input)
{
  return stripslashes(nl2br($input));
}

function clearStr($input)
{
  //return strip_tags($input);
  // dung.vo edited May 25, 2011
  return htmlspecialchars($input);
}
/*
 * return unix timestamp of current date
 */
function getDatetime(){
  return date('Y-m-d H:i:s');
}
/*
 *
 * upload multi file
 */
 function uploadMultifile ($model,$attr,$path)
{
  /*
   * path when uploads folder is on site root.
   * $path='/uploads/doc/'
   */
  if($sfile=CUploadedFile::getInstances($model, $attr)){
    foreach ($sfile as $i=>$file){
      $formatName=$file;
      $file->saveAs(Yii::app()->basePath .DIRECTORY_SEPARATOR.'..'. $path.$formatName);
      $ffile[$i]=$formatName;
    }
    return ($ffile);
  }
}

/*
 * This function tries to return a string with all NUL bytes, HTML and PHP tags stripped from a given string
 */
function Clean($arr){
  foreach($arr as $key=>$value){
    $arr[$key] = strip_tags($value);
  }
  return $arr;
}
 function deleteRow($model)
{
  $model->del_flg = 1;
  $model->save();

}
function vn_str_filter ($str){
  $unicode = array(
    'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
    'd'=>'đ',
    'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
    'i'=>'í|ì|ỉ|ĩ|ị',
    'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
    'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
    'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
    'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
    'D'=>'Đ',
    'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
    'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
    'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
    'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
    'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
  );

  foreach($unicode as $nonUnicode=>$uni){
    $str = preg_replace("/($uni)/i", $nonUnicode, $str);
  }
  return $str;
}