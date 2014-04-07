<?php

class DetailmenuimageController extends HomeController
{
	public function actionIndex()
	{
		$this->render('index');
	}

  /**
   * Creates a new model.
   * If creation is successful, the browser will be redirected to the 'view' page.
   */
  public function actionlist()
  {
    $id = $_GET['id_menu'];
    $menu = Menu::getMenuName($id);
    if(Yii::app()->language == "en"){
      $menu_name = $menu->menu_name_eng;
    } else{
      $menu_name = $menu->menu_name;
    }

    $criteria = new CDbCriteria();
    $criteria->condition = 'del_flg=0 AND menu_id=' .$id;
    $criteria->order     = 'id DESC';

    $count = Detailmenuimage::model()->count($criteria);
    $pages = new CPagination($count);
    //results per page
    $pages->pageSize = 16;
    $pages->applyLimit($criteria);
    $items = Detailmenuimage::model()->findAll($criteria);

    $this->render('list', array(
      'items'    => $items,
      'pages'    => $pages,
      'menu_name' => $menu_name
    ));

  }
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}