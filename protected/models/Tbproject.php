<?php

/**
 * This is the model class for table "tb_project".
 *
 * The followings are the available columns in table 'tb_project':
 * @property integer $id
 * @property string $pr_name
 * @property string $pr_specification
 * @property string $pr_date_create
 * @property integer $pr_status
 * @property integer $pr_user
 *
 * The followings are the available model relations:
 * @property TbMilestone[] $tbMilestones
 * @property TbStatus $prStatus
 * @property TbUser $prUser
 * @property TbTask[] $tbTasks
 * @property TbTeam[] $tbTeams
 * @property TbTimer[] $tbTimers
 */
class Tbproject extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pr_status, pr_user', 'numerical', 'integerOnly'=>true),
			array('pr_name', 'length', 'max'=>255),
			array('pr_specification', 'length', 'max'=>5000),
			array('pr_date_create', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pr_name, pr_specification, pr_date_create, pr_status, pr_user', 'safe', 'on'=>'search'),
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
			'tbMilestones' => array(self::HAS_MANY, 'Tbmilestone', 'm_project'),
			'prStatus' => array(self::BELONGS_TO, 'Tbstatus', 'pr_status'),
			'prUser' => array(self::BELONGS_TO, 'User', 'pr_user'),
			'tbTasks' => array(self::HAS_MANY, 'Tbtask', 't_project'),
			'tbTeams' => array(self::HAS_MANY, 'Tbteam', 'team_project'),
			'tbTimers' => array(self::HAS_MANY, 'Tbtimer', 'timer_project'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pr_name' => 'Pr Name',
			'pr_specification' => 'Pr Specification',
			'pr_date_create' => 'Pr Date Create',
			'pr_status' => 'Pr Status',
			'pr_user' => 'Pr User',
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
		$criteria->compare('pr_name',$this->pr_name,true);
		$criteria->compare('pr_specification',$this->pr_specification,true);
		$criteria->compare('pr_date_create',$this->pr_date_create,true);
		$criteria->compare('pr_status',$this->pr_status);
		$criteria->compare('pr_user',$this->pr_user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tbproject the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        //------------------------------------------------------------------------------------------
        //мои методы
        
        public function getTableAllProject()
        {
            
            $tableProject = array();
            
            $sql = "Select tb_project.id as id, tb_status.s_name as status, tb_project.pr_name as name , 
                    (SELECT count(*) from tb_task tt WHERE tb_project.id = tt.t_project) as countW,

                    (SELECT u_name FROM tb_user WHERE id= (
                    SELECT team_user
                    FROM tb_team 
                     WHERE
                    tb_team.team_role = 2 AND
                    tb_team.team_project  =  tb_project.id)) as firstName

                   FROM tb_project, tb_status
                   WHERE tb_project.pr_status = tb_status.id;";
		$connection = Yii::app()->db;
		$command = $connection->createCommand($sql);
		 $tableProject = $command->queryAll();
            
            return $tableProject;
        }
        
        
        
        //--------------------------------------------------------------------------------------------
}
