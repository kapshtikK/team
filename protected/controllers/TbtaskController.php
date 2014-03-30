<?php

class TbtaskController extends Controller
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
			//'postOnly + delete', // we only allow deletion via POST request (в рабочем проекте, чтоб удаление происходило - эту строка должна быть закомментирована)
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
				'users'=>array('*'),
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
		$model=new Tbtask;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tbtask']))
		{
			$model->attributes=$_POST['Tbtask'];
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
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tbtask']))
		{
			$model->attributes=$_POST['Tbtask'];
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
	public function actionDelete($id, $renderTo, $idProject)
	{
		//$this->loadModel($id)->delete();  //раскомментировать в рабочей версии приложения
                
            if($renderTo==1){
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('/tbtask/index/1'));
            }
            if(isset($idProject)){
              if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array("/tbproject/view/$idProject"));  
            }
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($id)
	{
            if($id==1)  //вывод всех существующих задач
            {
		 $model = Tbtask::model()->with('tStatus','tResponsible')->findAll();
		$this->render('index',array(
			'model'=>$model,
		));
            }
            if($id==10)  //вывод только тех задач, ответственным которых являюсь я
            {
		 $model = Tbtask::model()->with('tStatus','tResponsible')->findAllByAttributes(array('t_responsible'=>Yii::app()->user->id));
		$this->render('index',array(
			'model'=>$model,
		));
            }
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Tbtask('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Tbtask']))
			$model->attributes=$_GET['Tbtask'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Tbtask the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Tbtask::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Tbtask $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tbtask-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
