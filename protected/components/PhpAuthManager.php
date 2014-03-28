<?php
    class PhpAuthManager extends CPhpAuthManager{
        public function init(){
            if($this->authFile === null){
                $this->authFile = Yii::getPathOfAlias('application.config.auth').'.php';
            }

            parent::init();

            if(!Yii::app()->user->isGuest){
                $this->assign(Roles::model()->findByPk(Yii::app()->user->role)->r_name, Yii::app()->user->id);
            }
        }
    }
?>