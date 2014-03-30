<?php

/**
 * This is the model class for table "tb_team".
 *
 * The followings are the available columns in table 'tb_team':
 * @property integer $id
 * @property integer $team_project
 * @property integer $team_user
 * @property integer $team_role
 *
 * The followings are the available model relations:
 * @property TbProject $teamProject
 * @property TbUser $teamUser
 * @property TbRole $teamRole
 */
class Tbteam extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_team';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('team_project, team_user, team_role', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, team_project, team_user, team_role', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'teamProject' => array(self::BELONGS_TO, 'TbProject', 'team_project'),
			'teamUser' => array(self::BELONGS_TO, 'User', 'team_user'),
			'teamRole' => array(self::BELONGS_TO, 'Roles', 'team_role'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'team_project' => 'Team Project',
			'team_user' => 'Team User',
			'team_role' => 'Team Role',
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
		$criteria->compare('team_project',$this->team_project);
		$criteria->compare('team_user',$this->team_user);
		$criteria->compare('team_role',$this->team_role);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tbteam the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
