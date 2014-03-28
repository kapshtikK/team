<?php
    class Roles extends CActiveRecord
    {
        public $id;
        public $r_name;
        
        public static function model($className = __CLASS__) {
            return parent::model($className);
        }
        
        public function tableName() {
            return 'tb_role';
        }
    }
?>