<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class HomeController extends CController
{
  /**
   * @var string the default layout for the controller view. Defaults to '//layouts/column1',
   * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
   */
  public $layout='//layouts/column1';
  /**
   * @var array context menu items. This property will be assigned to {@link CMenu::items}.
   */
  public $menu=array();
  /**
   * @var array the breadcrumbs of the current page. The value of this property will
   * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
   * for more details on how to specify this property.
   */
  public $breadcrumbs=array();
  public function __construct($id,$module=null){
    parent::__construct($id,$module);
    // If there is a post-request, redirect the application to the provided url of the selected language
    if(isset($_POST['language'])) {
      $lang = $_POST['language'];
      $MultilangReturnUrl = $_POST[$lang];
      $this->redirect($MultilangReturnUrl);
    }
    // Set the application language if provided by GET, session or cookie
    if(isset($_GET['language'])) {
      Yii::app()->language = $_GET['language'];
      Yii::app()->user->setState('language', $_GET['language']);
      $cookie = new CHttpCookie('language', $_GET['language']);
      $cookie->expire = time() + (60*60*24*365); // (1 year)
      Yii::app()->request->cookies['language'] = $cookie;
    }
    else if (Yii::app()->user->hasState('language'))
      Yii::app()->language = Yii::app()->user->getState('language');
    else if(isset(Yii::app()->request->cookies['language']))
      Yii::app()->language = Yii::app()->request->cookies['language']->value;

    // Set page title
    $id = '';
    if (isset($_GET['id']))
      $id = $_GET['id'];
    if($id != ''){
      $info = Menu::model()->getMenuInfoId($id);
      $this->pageTitle = (Yii::app()->language == "en") ? $info->menu_name_eng : $info->menu_name;
    } else {
      $this->pageTitle = 	(Yii::app()->language == "en") ? 'HOME' : 'Trang Chủ';
    }
  }
  public function createMultilanguageReturnUrl($lang='en'){
    if (count($_GET)>0){
      $arr = $_GET;
      $arr['language']= $lang;
    }
    else
      $arr = array('language'=>$lang);
    return $this->createUrl('', $arr);
  }
  /*
  * FRONT
  */
  /*
   * Get list parent menu
   */
  public function getListParentMenuSortPriority ($parent_id = 0) {
    $menu_list = Menu::model()->findAll(array(
      'condition' => 'parent_menu_id = :parent_menu_id AND del_flg = :del_flg AND priority != :priority',
      'order' => 'priority ASC, create_date ASC',
      'params' => array(':parent_menu_id' => $parent_id,
        ':del_flg' => 0,
        ':priority' => 0)
    ));
    /*$menu_list = array();
    foreach ($parent_menu_list as $pm_list=>$v){
      $sub_menu_list = self::model()->findAll(array(
            'condition' => 'parent_menu_id = :parent_menu_id AND del_flg = :del_flg',
            'order' => 'priority ASC, create_date DESC',
            'params' => array(':parent_menu_id' => $v->id,
                      ':del_flg' => 0)
        ));
      $menu_list[$v->id] = $sub_menu_list;
    }*/
    return $menu_list;
  }

  /*
   * Basic SEO
   */
  public function getUrl($action,$id, $title)
  {
    return Yii::app()->createUrl($action, array(
      'id' => $id,
      'title' => $title,
      //'lang' => Yii::app()->language,
    ));
  }
  public function getUrlNews($action,$id, $name)
  {
    return Yii::app()->createUrl($action, array(
      'id' => $id,
      'name' => $name,
      //'lang' => Yii::app()->language,
    ));
  }
  public function getUrlMenuImage($action,$id, $nameimage)
  {
    return Yii::app()->createUrl($action, array(
      'id' => $id,
      'nameimage' => $nameimage,
      //'lang' => Yii::app()->language,
    ));
  }

}