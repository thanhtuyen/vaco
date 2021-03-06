<?php

class SiteController extends HomeController
{


	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
  public function actionContact()
  {
    $model=new ContactForm;
    if(isset($_POST['ContactForm']))
    {
      $model->attributes=$_POST['ContactForm'];
      if($model->validate())
      {
        $email = app()->params['adminEmail'];
        $email_user = $model->email;
        $copy = $_POST['ContactForm']['copy'];
        if($copy == 1){
          $cc = $email_user;
        } else {
          $cc = '';
        }

        MailTransport::sendMail($email_user, $email, $model->subject,
          CController::renderPartial('emailwelcome',array('name'=> $model->name, 'subject'=> $model->subject, 'content'=> $model->body,),true,false),
           $cc
        );
        Yii::app()->user->setFlash('contact','Cảm ơn bạn đã liên hệ với chúng tôi. Chúng tôi sẽ trả lời bạn càng sớm càng tốt.');
        $this->refresh();
      }
    }
    $this->render('contact',array('model'=>$model));
  }

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}