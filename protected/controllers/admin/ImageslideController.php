<?php

class ImageslideController extends AdminController
{

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
			$model->setScenario('create');
			$model->attributes = $_POST['Imageslide'];  
			// upload image
      $image_path = CUploadedFile::getInstance($model,'image_path');
      if (is_object($image_path) && get_class($image_path)==='CUploadedFile')
      {
        $model->image_path = $image_path;
      }
      $model->setScenario('create');
			if ($model->validate()) { 

        $model->create_date = getDatetime();
        $model->create_user_id = app()->user->getState('roles') == 'admin' ? User::ADMIN : User::USER;
        $model->del_flg = 0;
	      		
        $model->setIsNewRecord(true);
				$model->save(true,array('image_path','title','title_eng','caption','caption_eng','create_date','create_user_id','del_flg'));
        if (is_object($model->image_path)) {
          $model->image_path->saveAs(Yii::getPathOfAlias('webroot') . Imageslide::image_url . $model->image_path->name);
        }

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
		$this->pageTitle = Constants::$listModule['image_slide']['header'];
		
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		$old_image_path = $model->image_path;  
		if(isset($_POST['Imageslide']))
		{  
			$model->attributes = Clean($_POST['Imageslide']);
      $image_path = CUploadedFile::getInstance($model,'image_path');
			$model->update_date = getDatetime(); 
			//$model->create_user_id = app()->user->getState('roles') == 'admin' ? User::ADMIN : User::USER;
			if ($model->validate()) { 
				//check value image exists
        if (is_object($image_path) && get_class($image_path)==='CUploadedFile')
        {
          if(is_object($image_path)) {
            if($old_image_path != '') {
              unlink(Yii::getPathOfAlias('webroot') . Imageslide::image_url . $old_image_path);
            }

            $model->image_path = $image_path;
          } else {
            $model->image_path = $old_image_path;
          }

        }

				if($model->save())
          if($image_path) {
            $model->image_path->saveAs(Yii::getPathOfAlias('webroot') . Imageslide::image_url . $model->image_path->name);
          }
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
		/*$this->pageTitle = Constants::$listModule['image_slide']['header'];
		
		$fileName = 'index';
		$modelImageSlide = new Imageslide();
		$modelImageSlideSearch = new Imageslide('adminImageSlideSearch');
				
		$this->render($fileName, compact('modelImageSlide', 'modelImageSlideSearch'));*/
		
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
