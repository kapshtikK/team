<?php

/**
 * This is the model class for table "tb_timer".
 *
 * The followings are the available columns in table 'tb_timer':
 * @property integer $id
 * @property integer $timer_task
 * @property integer $timer_responsible
 * @property integer $timer_project
 * @property string $work_time
 *
 * The followings are the available model relations:
 * @property TbTask $timerTask
 * @property TbUser $timerResponsible
 * @property TbProject $timerProject
 */
class Tbtimer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_timer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('timer_task, timer_responsible, timer_project', 'numerical', 'integerOnly'=>true),
			array('work_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, timer_task, timer_responsible, timer_project, work_time', 'safe', 'on'=>'search'),
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
			'timerTask' => array(self::BELONGS_TO, 'TbTask', 'timer_task'),
			'timerResponsible' => array(self::BELONGS_TO, 'TbUser', 'timer_responsible'),
			'timerProject' => array(self::BELONGS_TO, 'TbProject', 'timer_project'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'timer_task' => 'Timer Task',
			'timer_responsible' => 'Timer Responsible',
			'timer_project' => 'Timer Project',
			'work_time' => 'Work Time',
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
		$criteria->compare('timer_task',$this->timer_task);
		$criteria->compare('timer_responsible',$this->timer_responsible);
		$criteria->compare('timer_project',$this->timer_project);
		$criteria->compare('work_time',$this->work_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tbtimer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
