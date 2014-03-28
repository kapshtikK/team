<?php
    class WebUser extends CWebUser {
        private $_model = null;

        function getRole() {
            if($user = $this->getModel()){                
                return $user->role_type;
            }
        }

        private function getModel(){
            if (!$this->isGuest && $this->_model === null){
                $this->_model = UserInput::model()->findByPk($this->id, array('select' => 'role_type'));
            }
            
            return $this->_model;
        }
    }
?>