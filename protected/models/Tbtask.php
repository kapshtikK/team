<?php

/**
 * This is the model class for table "tb_task".
 *
 * The followings are the available columns in table 'tb_task':
 * @property integer $id
 * @property string $t_name
 * @property string $t_specification
 * @property integer $t_project
 * @property integer $t_milestone
 * @property integer $t_responsible
 * @property string $t_start_date
 * @property string $t_deadline
 * @property integer $t_type
 * @property integer $t_status
 * @property string $t_date_create
 * @property integer $t_author
 *
 * The followings are the available model relations:
 * @property TbField[] $tbFields
 * @property TbSubtask[] $tbSubtasks
 * @property TbProject $tProject
 * @property TbMilestone $tMilestone
 * @property TbUser $tResponsible
 * @property TbStatus $tStatus
 * @property TbUser $tAuthor
 * @property TbTimer[] $tbTimers
 */
class Tbtask extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_task';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('t_project, t_milestone, t_responsible, t_type, t_status, t_author', 'numerical', 'integerOnly'=>true),
			array('t_name', 'length', 'max'=>255),
			array('t_specification', 'length', 'max'=>5000),
			array('t_start_date, t_deadline, t_date_create', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, t_name, t_specification, t_project, t_milestone, t_responsible, t_start_date, t_deadline, t_type, t_status, t_date_create, t_author', 'safe', 'on'=>'search'),
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
			'tbFields' => array(self::HAS_MANY, 'TbField', 'f_task'),
			'tbSubtasks' => array(self::HAS_MANY, 'TbSubtask', 'st_task'),
			'tProject' => array(self::BELONGS_TO, 'TbProject', 't_project'),
			'tMilestone' => array(self::BELONGS_TO, 'TbMilestone', 't_milestone'),
			'tResponsible' => array(self::BELONGS_TO, 'User', 't_responsible'),
			'tStatus' => array(self::BELONGS_TO, 'TbStatus', 't_status'),
			'tAuthor' => array(self::BELONGS_TO, 'User', 't_author'),
			'tbTimers' => array(self::HAS_MANY, 'TbTimer', 'timer_task'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			't_name' => 'T Name',
			't_specification' => 'T Specification',
			't_project' => 'T Project',
			't_milestone' => 'T Milestone',
			't_responsible' => 'T Responsible',
			't_start_date' => 'T Start Date',
			't_deadline' => 'T Deadline',
			't_type' => 'T Type',
			't_status' => 'T Status',
			't_date_create' => 'T Date Create',
			't_author' => 'T Author',
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
		$criteria->compare('t_name',$this->t_name,true);
		$criteria->compare('t_specification',$this->t_specification,true);
		$criteria->compare('t_project',$this->t_project);
		$criteria->compare('t_milestone',$this->t_milestone);
		$criteria->compare('t_responsible',$this->t_responsible);
		$criteria->compare('t_start_date',$this->t_start_date,true);
		$criteria->compare('t_deadline',$this->t_deadline,true);
		$criteria->compare('t_type',$this->t_type);
		$criteria->compare('t_status',$this->t_status);
		$criteria->compare('t_date_create',$this->t_date_create,true);
		$criteria->compare('t_author',$this->t_author);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tbtask the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
