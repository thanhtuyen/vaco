<?php

class DetailMenuController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
  /*
       *  init CSS and Javascript file
       */
  public function init(){
    Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/user.css');

    parent::init();
  }
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
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
		$model=new detailMenu;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['detailMenu']))
		{
      $model->attributes=Clean($_POST['detailMenu']);
//      $model->setAttributes(array('content_article'=>$_FILES['detailMenu']['name']['image_path'],
//       ));
      $model->setScenario('create');
      if ($model->validate()) {

        //save image_path
        $image_path = CUploadedFile::getInstance($model, 'image_path');
        if (is_object($image_path) && get_class($image_path)==='CUploadedFile')
        {
          $model->image_path = $image_path;
        }

        if (is_object($model->image_path)) {
          $model->image_path->saveAs(Yii::getPathOfAlias('webroot'). detailMenu::S_THUMBNAIL.$model->image_path->name);
        }

        //save list file attach
//        if(isset($_FILES[$modelClass]))        {
//          $this->keyImages = array_keys($_FILES[$modelClass]['name']);
//          foreach($this->keyImages as $k)            {
//            echo $k;die;                $model->$k = CUploadedFile::getInstances($model,$k);            }        }
//
        if($model->save())
          $this->redirect(array('view','id'=>$model->id));
      }

    }

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['detailMenu']))
		{
			$model->attributes=$_POST['detailMenu'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('detailMenu');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new detailMenu('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['detailMenu']))
			$model->attributes=$_GET['detailMenu'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return detailMenu the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=detailMenu::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param detailMenu $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='detail-menu-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
