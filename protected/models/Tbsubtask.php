<?php

/**
 * This is the model class for table "tb_subtask".
 *
 * The followings are the available columns in table 'tb_subtask':
 * @property integer $id
 * @property string $st_specification
 * @property integer $st_task
 * @property integer $st_responsible
 * @property string $st_date_create
 *
 * The followings are the available model relations:
 * @property TbTask $stTask
 * @property TbUser $stResponsible
 */
class Tbsubtask extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_subtask';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('st_task, st_responsible', 'numerical', 'integerOnly'=>true),
			array('st_specification', 'length', 'max'=>5000),
			array('st_date_create', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, st_specification, st_task, st_responsible, st_date_create', 'safe', 'on'=>'search'),
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
			'stTask' => array(self::BELONGS_TO, 'TbTask', 'st_task'),
			'stResponsible' => array(self::BELONGS_TO, 'TbUser', 'st_responsible'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'st_specification' => 'St Specification',
			'st_task' => 'St Task',
			'st_responsible' => 'St Responsible',
			'st_date_create' => 'St Date Create',
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
		$criteria->compare('st_specification',$this->st_specification,true);
		$criteria->compare('st_task',$this->st_task);
		$criteria->compare('st_responsible',$this->st_responsible);
		$criteria->compare('st_date_create',$this->st_date_create,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tbsubtask the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
