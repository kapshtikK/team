<?php

class TbmilestoneController extends Controller
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
			//'postOnly + delete', // we only allow deletion via POST request (в рабочем проекте, чтоб удаление происходило - эту строку закомментировать)
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
		$model=new Tbmilestone;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tbmilestone']))
		{
			$model->attributes=$_POST['Tbmilestone'];
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

		if(isset($_POST['Tbmilestone']))
		{
			$model->attributes=$_POST['Tbmilestone'];
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
		//$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('/tbmilestone/index/1'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($id)
	{
            if($id==1) //отображение всех вех
            {
                $model = Tbmilestone::model()->with('mStatus','mResponsible')->findAll();
		//$dataProvider=new CActiveDataProvider('Tbmilestone');
		$this->render('index',array(
			'model'=>$model,
		));
            }
            
            if($id==10)//отображение только тех вех по которым я ответственный
            {
                $model = Tbmilestone::model()->with('mStatus','mResponsible')->findAllByAttributes(array('m_responsible'=>Yii::app()->user->id));
		//$dataProvider=new CActiveDataProvider('Tbmilestone');
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
		$model=new Tbmilestone('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Tbmilestone']))
			$model->attributes=$_GET['Tbmilestone'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Tbmilestone the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Tbmilestone::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Tbmilestone $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tbmilestone-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
