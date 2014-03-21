<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class AdminController extends CController
{
  /**
   * @var string the default layout for the controller view. Defaults to '//layouts/column2',
   * meaning using a single column layout. See 'theme/views/layouts/column2.php'.
   */
  public $layout='//layouts/column2';
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


  /**
   * @return array action filters
   */
  public function filters()
  {
    return array(
      'accessControl', // perform access control for CRUD operations
      'postOnly + delete', // we only allow deletion via POST request
    );
  }

  /**
   * Specifies the access control rules.
   * This method is used by the 'accessControl' filter.
   * @return array access control rules
   */
  public function accessRules()
  {
    if(app()->user->getState('roles') =="admin") {

      $arr =array('index','create', 'update', 'view', 'admin', 'delete');   /* give all access to admin */
    } else {

      $arr = array('view', 'admin', 'index', 'create');    /*  no access to other user */
    }

    return array(array('allow',
      'actions'=>$arr,
      'users'=>array('@'),),
      array('deny',
        'users'=>array('*'),),
    );
  }

}