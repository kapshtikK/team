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
//мое--------------------------------------------------------------------------------------------------     
        public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tbTeams' => array(self::HAS_MANY, 'TbTeam', 'team_role'),
		);
	}
        public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('r_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, r_name', 'safe', 'on'=>'search'),
		);
	}
        public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'r_name' => 'R Name',
		);
	}
        public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('r_name',$this->r_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
//----------------------------------------------------------------------------------------------
    }
?>