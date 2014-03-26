<?php

/**
 * This is the model class for table "tb_user".
 *
 * The followings are the available columns in table 'tb_user':
 * @property integer $id
 * @property string $u_name
 * @property string $u_login
 * @property string $u_password
 * @property integer $role_type
 *
 * The followings are the available model relations:
 * @property TbGroup[] $tbGroups
 * @property TbGroup[] $tbGroups1
 * @property TbMilestone[] $tbMilestones
 * @property TbMilestone[] $tbMilestones1
 * @property TbProject[] $tbProjects
 * @property TbSubtask[] $tbSubtasks
 * @property TbTask[] $tbTasks
 * @property TbTask[] $tbTasks1
 * @property TbTeam[] $tbTeams
 * @property TbTimer[] $tbTimers
 * @property TbRole $roleType
 */
class Tbuser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('role_type', 'numerical', 'integerOnly'=>true),
			array('u_name, u_login, u_password', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, u_name, u_login, u_password, role_type', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tbGroups' => array(self::HAS_MANY, 'TbGroup', 'g_admin'),
			'tbGroups1' => array(self::HAS_MANY, 'TbGroup', 'g_user'),
			'tbMilestones' => array(self::HAS_MANY, 'TbMilestone', 'm_responsible'),
			'tbMilestones1' => array(self::HAS_MANY, 'TbMilestone', 'm_author'),
			'tbProjects' => array(self::HAS_MANY, 'TbProject', 'pr_user'),
			'tbSubtasks' => array(self::HAS_MANY, 'TbSubtask', 'st_responsible'),
			'tbTasks' => array(self::HAS_MANY, 'TbTask', 't_responsible'),
			'tbTasks1' => array(self::HAS_MANY, 'TbTask', 't_author'),
			'tbTeams' => array(self::HAS_MANY, 'TbTeam', 'team_user'),
			'tbTimers' => array(self::HAS_MANY, 'TbTimer', 'timer_responsible'),
			'roleType' => array(self::BELONGS_TO, 'TbRole', 'role_type'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'u_name' => 'U Name',
			'u_login' => 'U Login',
			'u_password' => 'U Password',
			'role_type' => 'Role Type',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('u_name',$this->u_name,true);
		$criteria->compare('u_login',$this->u_login,true);
		$criteria->compare('u_password',$this->u_password,true);
		$criteria->compare('role_type',$this->role_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tbuser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
