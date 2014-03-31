<?php

class DetailmenuController extends AdminController
{
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
  public function actionView($id)
  {
    $this->pageTitle = Constants::$listModule['detail_menu']['header'];

    $model = $this->loadModel($id);
    $model->setAttribute('detail', CHtml::decode($model->detail));
    $model->setAttribute('detail_eng', CHtml::decode($model->detail_eng));

    $this->render('view',array(
      'model'=>$model,
    ));
  }
  /**
   * Creates a new model.
   * If creation is successful, the browser will be redirected to the 'view' page.
   */
  public function actionCreate()
  {
    $this->pageTitle = Constants::$listModule['detail_menu']['header'];

    $model=new Detailmenu;
    $model->feature_flg = 1; // set default feature_flg

    // Uncomment the following line if AJAX validation is needed
    //$this->performAjaxValidation($model);

    if(isset($_POST['Detailmenu']))
    {
      $model->attributes=Clean($_POST['Detailmenu']);
      $model->setScenario('create');
      if ($model->validate()) {
        $model->detail = CHtml::encode($_POST['Detailmenu']['detail']);
        $model->detail_eng = CHtml::encode($_POST['Detailmenu']['detail_eng']);
        //save image_path
        $image_path = CUploadedFile::getInstance($model, 'image_path');
        if (is_object($image_path) && get_class($image_path)==='CUploadedFile')
        {
          $model->image_path = $image_path;
        }

        //save list_attach_file
        $sfile=CUploadedFile::getInstances($model, 'list_file_attach');

        if($sfile){
          foreach ($sfile as $i=>$file){
            $formatName=$file;
            $ffile[$i]=$formatName;
          }
          $model->list_file_attach = implode(',', $ffile);
        }
        $model->feature_flg = $_POST['Detailmenu']['feature_flg'];
        $model->create_date = getDatetime();
        $model->create_user = app()->user->id;
        $model->del_flg = 0;
        if($model->save(true,array('menu_id','title','description','caption','detail','title_eng','description_eng','caption_eng','detail_eng','image_path','list_file_attach','create_date','create_user','del_flg','feature_flg')))

          if (is_object($model->image_path)) {
            $model->image_path->saveAs(Yii::getPathOfAlias('webroot'). Detailmenu::S_THUMBNAIL.$model->image_path->name);
          }

        if($sfile){
          uploadMultifile($model,'list_file_attach',Detailmenu::file_url);
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
    $this->pageTitle = Constants::$listModule['detail_menu']['header'];

    $model=$this->loadModel($id);
    $model->setAttribute('detail', CHtml::decode($model->detail));
    $model->setAttribute('detail_eng', CHtml::decode($model->detail_eng));
    // Uncomment the following line if AJAX validation is needed
    // $this->performAjaxValidation($model);

    $old_image_path = $model->image_path;
    $old_file = $model->list_file_attach;
    $menu_id = $model->menu_id;
    $array_file = explode(',',$model->list_file_attach);
    if(isset($_POST['Detailmenu']))
    {
      $model->attributes=$_POST['Detailmenu'];
      $image_path = CUploadedFile::getInstance($model, 'image_path');

      $sfile = CUploadedFile::getInstances($model,'list_file_attach');
      if($sfile){
        foreach ($sfile as $i=>$file){
          $formatName=$file;
          $ffile[$i]=$formatName;
        }
        $model->list_file_attach = implode(',', $ffile);
      }
      $model->update_date = getDatetime();
      $model->feature_flg = $_POST['Detailmenu']['feature_flg'];
      if ($model->validate()) {
        $model->detail = CHtml::encode($_POST['Detailmenu']['detail']);
        $model->detail_eng = CHtml::encode($_POST['Detailmenu']['detail_eng']);
        // upload image
        if (is_object($image_path) && get_class($image_path)==='CUploadedFile')
        {
          if(is_object($image_path)) {
            if($old_image_path != '') {
              unlink(Yii::getPathOfAlias('webroot') . Detailmenu::S_THUMBNAIL . $old_image_path);
            }

            $model->image_path = $image_path;
          } else {
            $model->image_path = $old_image_path;
          }

        }

        if($sfile){
          foreach ($array_file as $k){
            if($k!=""){
              $file_path = Yii::getPathOfAlias('webroot') . Detailmenu::file_url . $k;
              if($file_path)
                unlink(Yii::getPathOfAlias('webroot') . Detailmenu::file_url . $k);
            }
          }
          foreach ($sfile as $i=>$file){
            $formatName=$file;
            $ffile[$i]=$formatName;
          }

          $model->list_file_attach = implode(',', $ffile);
        } else {
          $model->list_file_attach = $old_file;
        }
        $model->menu_id= $menu_id;
        if($model->save())
          if($image_path) {
            $model->image_path->saveAs(Yii::getPathOfAlias('webroot') . Detailmenu::S_THUMBNAIL . $model->image_path->name);
          }

        if($sfile != '')
        {
          uploadMultifile($model,'list_file_attach',Detailmenu::file_url);
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
    $model = $this->loadModel($id);
    deleteRow($model);

    // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
    if(!isset($_GET['ajax']))
      $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
  }

  /**
   * Lists all models.
   */
//	public function actionIndex()
//	{
//		$dataProvider=new CActiveDataProvider('Detailmenu');
//		$this->render('index',array(
//			'dataProvider'=>$dataProvider,
//		));
//	}

  /**
   * Manages all models.
   */
  public function actionAdmin()
  {
    $model=new Detailmenu('search');
    $model->unsetAttributes();  // clear any default values
    if(isset($_GET['Detailmenu']))
      $model->attributes=$_GET['Detailmenu'];

    $this->render('admin',array(
      'model'=>$model,
    ));
  }

  /**
   * Returns the data model based on the primary key given in the GET variable.
   * If the data model is not found, an HTTP exception will be raised.
   * @param integer $id the ID of the model to be loaded
   * @return Detailmenu the loaded model
   * @throws CHttpException
   */
  public function loadModel($id)
  {
    $model=Detailmenu::model()->findByPk($id);
    if($model===null)
      throw new CHttpException(404,'The requested page does not exist.');
    return $model;
  }

  /**
   * Performs the AJAX validation.
   * @param Detailmenu $model the model to be validated
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
