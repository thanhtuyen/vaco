<?php

class DetailmenuimageController extends Controller
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
		$this->pageTitle = Constants::$listModule['detail_menu_image']['header'];
		
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
		$this->pageTitle = Constants::$listModule['detail_menu_image']['header'];
		
		$model=new Detailmenuimage;
		$model->public_flg = 0; // set default public_flg
		$model->feature_flg = 1; // set default feature_flg

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Detailmenuimage']))
		{
			$model->setScenario('create');
			$model->attributes=$_POST['Detailmenuimage'];
			
			if ($model->validate()) {
				$model->create_date = getDatetime();
	      		$model->create_user = app()->user->getState('roles') == 'admin' ? User::ADMIN : User::USER;
	      		$model->del_flg = 0;
	      		
	      		// upload image
				$model->image_path = CUploadedFile::getInstance($model,'image_path'); 
				if (is_object($model->image_path)) 	
		          	$model->image_path->saveAs(Yii::getPathOfAlias('webroot') . Detailmenuimage::image_url . $model->image_path);
					
	      		
				if($model->save(true,array('menu_id','image_path','caption','caption_eng','create_user','del_flg','public_flg','feature_flg','create_date','update_date')))
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
		$this->pageTitle = Constants::$listModule['detail_menu_image']['header'];
		
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$old_image_path = $model->image_path; 
		if(isset($_POST['Detailmenuimage']))
		{
			$model->attributes=$_POST['Detailmenuimage'];
			
			$model->image_path = CUploadedFile::getInstance($model,'image_path');
			$model->update_date = getDatetime();
			if ($model->validate()) {
				// upload image
		        $image_path = CUploadedFile::getInstance($model, 'image_path');
		        if (is_object($image_path) && get_class($image_path)==='CUploadedFile')
		        	$model->image_path = $image_path;
		
		        if (is_object($model->image_path)) { 
		        	$image_path = Yii::getPathOfAlias('webroot') . Detailmenuimage::image_url . $old_image_path;
					if($old_image_path && file_exists($image_path)) 
		          		unlink(Yii::getPathOfAlias('webroot') . Detailmenuimage::image_url . $old_image_path);
		
		          	$model->image_path->saveAs(Yii::getPathOfAlias('webroot') . Detailmenuimage::image_url . $model->image_path);
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
		//$this->loadModel($id)->delete();
		$model = $this->loadModel($id);
		deleteRow($model);

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->pageTitle = Constants::$listModule['detail_menu_image']['header'];
		
		$model=new Detailmenuimage('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Detailmenuimage']))
			$model->attributes=$_GET['Detailmenuimage'];

		$this->render('admin',array(
			'model'=>$model,
		));
		
		/*$dataProvider=new CActiveDataProvider('Detailmenuimage');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));*/
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->pageTitle = Constants::$listModule['detail_menu_image']['header'];
		
		$model=new Detailmenuimage('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Detailmenuimage']))
			$model->attributes=$_GET['Detailmenuimage'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Detailmenuimage the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Detailmenuimage::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Detailmenuimage $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='detailmenuimage-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
