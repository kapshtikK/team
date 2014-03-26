<?php

/**
 * This is the model class for table "tb_milestone".
 *
 * The followings are the available columns in table 'tb_milestone':
 * @property integer $id
 * @property string $m_name
 * @property string $m_specification
 * @property integer $m_responsible
 * @property string $m_date_create
 * @property string $m_deadline
 * @property integer $m_reminder
 * @property integer $m_type
 * @property integer $m_status
 * @property integer $m_author
 * @property integer $m_project
 *
 * The followings are the available model relations:
 * @property TbUser $mResponsible
 * @property TbStatus $mStatus
 * @property TbUser $mAuthor
 * @property TbProject $mProject
 * @property TbTask[] $tbTasks
 */
class Tbmilestone extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_milestone';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('m_responsible, m_reminder, m_type, m_status, m_author, m_project', 'numerical', 'integerOnly'=>true),
			array('m_name', 'length', 'max'=>255),
			array('m_specification', 'length', 'max'=>5000),
			array('m_date_create, m_deadline', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, m_name, m_specification, m_responsible, m_date_create, m_deadline, m_reminder, m_type, m_status, m_author, m_project', 'safe', 'on'=>'search'),
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
			'mResponsible' => array(self::BELONGS_TO, 'TbUser', 'm_responsible'),
			'mStatus' => array(self::BELONGS_TO, 'TbStatus', 'm_status'),
			'mAuthor' => array(self::BELONGS_TO, 'TbUser', 'm_author'),
			'mProject' => array(self::BELONGS_TO, 'TbProject', 'm_project'),
			'tbTasks' => array(self::HAS_MANY, 'TbTask', 't_milestone'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'm_name' => 'M Name',
			'm_specification' => 'M Specification',
			'm_responsible' => 'M Responsible',
			'm_date_create' => 'M Date Create',
			'm_deadline' => 'M Deadline',
			'm_reminder' => 'M Reminder',
			'm_type' => 'M Type',
			'm_status' => 'M Status',
			'm_author' => 'M Author',
			'm_project' => 'M Project',
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
		$criteria->compare('m_name',$this->m_name,true);
		$criteria->compare('m_specification',$this->m_specification,true);
		$criteria->compare('m_responsible',$this->m_responsible);
		$criteria->compare('m_date_create',$this->m_date_create,true);
		$criteria->compare('m_deadline',$this->m_deadline,true);
		$criteria->compare('m_reminder',$this->m_reminder);
		$criteria->compare('m_type',$this->m_type);
		$criteria->compare('m_status',$this->m_status);
		$criteria->compare('m_author',$this->m_author);
		$criteria->compare('m_project',$this->m_project);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tbmilestone the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
