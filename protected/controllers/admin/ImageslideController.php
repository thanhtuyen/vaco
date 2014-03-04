<?php

class ImageslideController extends Controller
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->pageTitle = Constants::$listModule['image_slide']['header'];
		
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
		$this->pageTitle = Constants::$listModule['image_slide']['header'];
		
		$model=new Imageslide;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Imageslide']))
		{ 
			$model->attributes = Clean($_POST['Imageslide']);  
			$model->setScenario('create');	

			// upload image
			$model->image_path = CUploadedFile::getInstance($model,'image_path'); 
			if (is_object($model->image_path)) 	
	          	$model->image_path->saveAs(Yii::getPathOfAlias('webroot') . Imageslide::image_url . $model->image_path);
	        
      		$model->create_date = getDatetime();
      		$model->create_user_id = app()->user->getState('roles') == 'admin' ? User::ADMIN : User::USER;
      		$model->del_flg = 0; 
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$this->pageTitle = Constants::$listModule['image_slide']['header'];
		
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		$old_image_path = $model->image_path;  
		if(isset($_POST['Imageslide']))
		{  
			$model->attributes = Clean($_POST['Imageslide']); 
			$model->image_path = CUploadedFile::getInstance($model,'image_path'); 
			$model->update_date = getDatetime(); 
			//$model->create_user_id = app()->user->getState('roles') == 'admin' ? User::ADMIN : User::USER;
			if ($model->validate()) { 
				//check value image exists
		        $image_path = CUploadedFile::getInstance($model, 'image_path');
		        if (is_object($image_path) && get_class($image_path)==='CUploadedFile')
		        	$model->image_path = $image_path;
		
		        if (is_object($model->image_path)) { 
		        	$image_path = Yii::getPathOfAlias('webroot') . Imageslide::image_url . $old_image_path;
					if($old_image_path && file_exists($image_path)) 
		          		unlink(Yii::getPathOfAlias('webroot') . Imageslide::image_url . $old_image_path);
		
		          	$model->image_path->saveAs(Yii::getPathOfAlias('webroot') . Imageslide::image_url . $model->image_path);
		        } else { 
		          $model->image_path = $old_image_path;
		        }
				
				if($model->save())
					$this->redirect(array('view','id'=>$model->id));
			}
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
		/*if(Yii::app()->request->isPostRequest)
		{ 
			$model = $this->loadModel($id); 
			$model->del_flg = DELETE;
			$model->save(false);
			$this->redirect(array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');*/
			
			
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
		$this->pageTitle = Constants::$listModule['image_slide']['header'];
		
		$fileName = 'index';
		$modelImageSlide = new Imageslide();
		$modelImageSlideSearch = new Imageslide('adminImageSlideSearch');
		/*$dataProvider=new CActiveDataProvider('Imageslide');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));*/
		
		$this->render($fileName, compact('modelImageSlide', 'modelImageSlideSearch'));
		
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->pageTitle = Constants::$listModule['image_slide']['header'];
		
		$model=new Imageslide('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Imageslide']))
			$model->attributes=$_GET['Imageslide'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Imageslide the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Imageslide::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Imageslide $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='imageslide-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	/*
	*  init CSS and Javascript file
	*/
	public function init(){
		//Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/imageslide.css');
		parent::init();
	}
	
}
