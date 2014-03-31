<?php

class MenuController extends AdminController
{

  /*
     *  init CSS and Javascript file
     */
  public function init(){
    //Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/user.css');

    parent::init();
  }
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->pageTitle = Constants::$listModule['menu']['header'];
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$this->pageTitle = Constants::$listModule['menu']['header'];
		$model=new Menu;
		$model->priority = 2; // set default priority

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
    	$list_menu_type = Menu::getListMenuType();
		if(isset($_POST['Menu']))
		{
			$model->attributes=Clean($_POST['Menu']);
      $parent_menu_id = $_POST['Menu']['parent_menu_id'];
      if($parent_menu_id != 0){
        $model_parent = Menu::model()->findByPk($parent_menu_id);
        $model->menu_type = $model_parent->menu_type;
      } else {
        $model->menu_type = $_POST['Menu']['menu_type'];
      }

      $model->create_date = getDatetime();
			$model->create_user_id = app()->user->id;
			$model->del_flg = 0;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,'list_menu_type' => $list_menu_type
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$this->pageTitle = Constants::$listModule['menu']['header'];
		
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
    	$list_menu_type = Menu::getListMenuType();
		if(isset($_POST['Menu']))
		{
			$model->attributes=$_POST['Menu'];
      $parent_menu_id = $_POST['Menu']['parent_menu_id'];
      if($parent_menu_id != 0){
        $model_parent = Menu::model()->findByPk($parent_menu_id);
        $model->menu_type = $model_parent->menu_type;
      } else {
        $model->menu_type = $_POST['Menu']['menu_type'];
      }

			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,'list_menu_type' => $list_menu_type
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
    $model=$this->loadModel($id);
    $model->del_flg = 1;
    $model_detail_menu = Detailmenu::model()->findByAttributes(array('menu_id'=> $id));
    if($model_detail_menu){
      $model_detail_menu->del_flg = 1;
      $model_detail_menu->save();
    }
    $model_news = News::model()->findAllByAttributes(array('menu_id'=> $id));
    foreach($model_news as $n){
      deleteRow($n);
    }
    $model_image = Detailmenuimage::model()->findAllByAttributes(array('menu_id' => $id));
    foreach($model_image as $i) {
      deleteRow($i);
    }

    $model->save();
    //deleteRow($model);

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
//		if(!isset($_GET['ajax']))
//			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
//		$dataProvider=new CActiveDataProvider('Menu');
//		$this->render('index',array(
//			'dataProvider'=>$dataProvider,
//		));

   // $categories = Menu::findTreeCategory();
    $dataProvider = array(
      array(
        'text' => 'Root',
        'children' => Menu::findTreeMenu(),
      ),
    );
    $this->render('index',array(
      'dataProvider'=>$dataProvider,
    ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->pageTitle = Constants::$listModule['menu']['header'];
		
		$model=new Menu('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Menu']))
			$model->attributes=$_GET['Menu'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Menu the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Menu::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Menu $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='menu-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
