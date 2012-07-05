<?php

class SiteController extends Controller
{
    
    public function actions(){
        return array(
            'captcha' => array('class' => 'CCaptchaAction')
        );
    }
    
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
	    $this->pageTitle = 'Get Started';
		$this->render('index');
	}


	public function actionTypo(){
	    $this->render('typo');
        return;
	}
    
	public function actionGrid(){
	    $this->render('grid');
        return;
	}
    
	public function actionButtons(){
	    $this->render('buttons');
	}
    
	public function actionForms(){
	    $model = new SimpleForm;
        $model->field9 = "This is a textarea";
        $model->field22 = "This is a textarea";
        $model->field29 = 2;
        $model->field30 = array(2, 3);
        $model->field31 = 1;
        $model->field32 = 2;
        $model->validate();
	    $this->render('forms', compact('model'));	}
    
	public function actionLayout(){
	    $this->render('layout');
	}
    
	public function actionUi(){
	    Yii::app()->user->setFlash("info", "This is a standard alert (div.alert-box).");
	    Yii::app()->user->setFlash("success", "This is a success alert (div.alert-box.success).");
	    Yii::app()->user->setFlash("warning", "This is a warning alert (div.alert-box.warning).");
	    Yii::app()->user->setFlash("error", "This is an error alert (div.alert-box.error). ");
        
        $pager = new CPagination(60);
        
	    $this->render('ui', compact('pager'));
	}
    
	public function actionOrbit(){
	    $this->render('orbit');
	}
    
	public function actionReveal(){
	    $this->render('reveal');
	}
    
	public function actionGems(){
	    $this->render('gems');
	}
    
	public function actionQa(){
	    $this->render('qa');
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

}