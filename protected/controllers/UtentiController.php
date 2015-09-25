<?php

class UtentiController extends Controller
{
	public $layout ='column1';
	public function actionIndex(){
		$this->render('index');
	}
	
	function actionLogin(){
		$model = new LoginForm();
		if(isset($_POST['LoginForm'])){
 			$model->attributes = $_POST['LoginForm'];
 			if(/*$model->validate() &&*/ $model->login()){
 				$this->redirect(Yii::app()->user->getState('returnUrl'));
			}
		}
		$this->layout='popup';
		$this->render('login',array('model'=>$model));
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