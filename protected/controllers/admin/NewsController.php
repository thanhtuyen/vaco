<?php

class NewsController extends Controller
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
		$this->pageTitle = Constants::$listModule['news']['header'];
		$modelKeyword = Keyword::model()->findByPk($id);
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'modelKeyword'=>$modelKeyword,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$this->pageTitle = Constants::$listModule['news']['header'];
		
		// init model
		$modelKeyword = new Keyword();		
		$model= new News; 
		$model->is_public = 0; // set default is_public
		$model->feature_flag = 1; // set default feature_flag
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['News']))
		{ 
			$model->attributes = $_POST['News'];
			//$post_value = $_POST['News'];
      		$model->setScenario('create');
      		if ($model->validate()) {
				//$list_menu_id = Clean($_POST['News']['menu_id']); 
				//foreach ($list_menu_id as $l_menu_id=>$menu_id){
					//$model=new News;
	      			//$model->attributes=$post_value;				
					//$model->menu_id = $menu_id;	 
					$model->detail = CHtml::encode($_POST['News']['detail']);
					$model->detail_eng = CHtml::encode($_POST['News']['detail_eng']);
			        $model->create_date = getDatetime();
			        $model->create_user_id = app()->user->getState('roles') == 'admin' ? User::ADMIN : User::USER;
			        $model->del_flg = 0;
	
		      		// upload image
					$model->thumb_image_path = CUploadedFile::getInstance($model,'thumb_image_path'); 
					if (is_object($model->thumb_image_path)) 	
			          	$model->thumb_image_path->saveAs(Yii::getPathOfAlias('webroot') . News::image_url . $model->thumb_image_path);
		            //save list_attach_file
		            $sfile=CUploadedFile::getInstances($model, 'listfile_attach');
		
		            if($sfile){
		              foreach ($sfile as $i=>$file){
		                $formatName=$file;
		                $ffile[$i]=$formatName;
		              }
		              $model->list_file_attach = implode(',', $ffile);
		            }

					$model->setIsNewRecord(true);	
					$model->save(true,array('thumb_image_path','listfile_attach','menu_id','title','caption','detail','title_eng','caption_eng','detail_eng','create_user_id','create_date','feature_flag','is_public','del_flg'));
		            // upload file
					if($files = uploadMultifile($model,'listfile_attach', News::file_url))
		            $model->listfile_attach = implode(",", $files);
					// Insert keyword
					if(isset($_POST['Keyword'])){
						$modelKeyword->attributes = Clean($_POST['Keyword']);
						$modelKeyword->id = $model->id;
						$modelKeyword->create_date = getDatetime();
						$modelKeyword->setIsNewRecord(true);	
						$modelKeyword->save();
					}
				//}
	      		$this->redirect(array('view','id'=>$model->id));
      		}
		}

		$this->render('create',array(
			'model'=>$model,
			'modelKeyword'=>$modelKeyword,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$this->pageTitle = Constants::$listModule['news']['header'];
		
		// init model
		$modelKeyword = Keyword::model()->findByPk($id); 
		$model = $this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		$old_image_path = $model->thumb_image_path; 
		$old_file = $model->listfile_attach;
		$array_file = explode(',',$model->listfile_attach);  
		if(isset($_POST['News']))
		{
      		$model->setScenario('update');
			$model->attributes = $_POST['News'];
			$model->detail = CHtml::encode($_POST['News']['detail']);
			$model->detail_eng = CHtml::encode($_POST['News']['detail_eng']);
			$model->thumb_image_path = CUploadedFile::getInstance($model,'thumb_image_path');
			
			$model->listfile_attach = CUploadedFile::getInstances($model,'listfile_attach'); 

			$model->update_date = getDatetime(); 
			//$model->create_user_id = app()->user->getState('roles') == 'admin' ? User::ADMIN : User::USER;
			if ($model->validate()) { 
				// upload image
		        $image_path = CUploadedFile::getInstance($model, 'thumb_image_path');
		        if (is_object($image_path) && get_class($image_path)==='CUploadedFile')
		        	$model->thumb_image_path = $image_path;
		
		        if (is_object($model->thumb_image_path)) { 
		        	$image_path = Yii::getPathOfAlias('webroot') . News::image_url . $old_image_path;
					if($old_image_path && file_exists($image_path)) 
		          		unlink(Yii::getPathOfAlias('webroot') . News::image_url . $old_image_path);
		
		          	$model->thumb_image_path->saveAs(Yii::getPathOfAlias('webroot') . News::image_url . $model->thumb_image_path);
		        } else { 
					$model->thumb_image_path = $old_image_path;
		        }

		        // upload files		       
		        if($model->listfile_attach != array()){ 
					foreach ($array_file as $k){ 
						if($k!=""){ 
				        	$file_path = Yii::getPathOfAlias('webroot') . News::file_url . $k;
							if(file_exists($file_path)) 
				          		unlink(Yii::getPathOfAlias('webroot') . News::file_url . $k);
						}
					} 
					if($files = uploadMultifile($model,'listfile_attach', News::file_url))
						$model->listfile_attach = implode(",", $files);				
		        } else {
		        	$model->listfile_attach = $old_file;
		        }
				
				if($model->save()){ 
					// Update keyword
					if(isset($_POST['Keyword']) && isset($modelKeyword->id)){
						$modelKeyword->attributes = Clean($_POST['Keyword']);	
						$modelKeyword->save();
					}
					
					$this->redirect(array('view','id'=>$model->id));
				}
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'modelKeyword'=>$modelKeyword
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
		$this->pageTitle = Constants::$listModule['news']['header'];
		
		$model=new News('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['News']))
			$model->attributes=$_GET['News'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{ 
		$this->pageTitle = Constants::$listModule['news']['header'];
		
		$model=new News('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['News']))
			$model->attributes=$_GET['News'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return News the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=News::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param News $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='news-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	/*
	*  init CSS and Javascript file
	*/
	public function init(){ 
		Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.multiselect.filter.js');
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/jquery.multiselect.filter.css');
		parent::init();
	}
}
