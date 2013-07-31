<?php

/**
 * This is the model class for table "Trainings".
 *
 * The followings are the available columns in table 'Trainings':
 * @property integer $TrainingID
 * @property string $TrainingName
 * @property string $Date
 * @property string $Duration
 * @property string $Location
 * @property string $Trainer
 * @property string $Category
 * @property integer $Participants
 * @property string $Surveys
 * @property string $Status
 * @property string $Remarks
 * @property string $Admin
 *
 * The followings are the available model relations:
 * @property SurveyResults[] $surveyResults
 */
class Trainings extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Trainings the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Trainings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TrainingName, Date, Duration, Location, Trainer, Category, Participants, Surveys, Status, Remarks, Admin', 'required'),
			array('Participants', 'numerical', 'integerOnly'=>true),
			array('TrainingName, Surveys', 'length', 'max'=>50),
			array('Duration', 'length', 'max'=>7),
			array('Location', 'length', 'max'=>80),
			array('Trainer, Category', 'length', 'max'=>60),
			array('Status', 'length', 'max'=>45),
			array('Remarks', 'length', 'max'=>300),
			array('Admin', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('TrainingID, TrainingName, Date, Duration, Location, Trainer, Category, Participants, Surveys, Status, Remarks, Admin', 'safe', 'on'=>'search'),
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
			'surveyResults' => array(self::HAS_MANY, 'SurveyResults', 'TrainingID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TrainingID' => 'Training',
			'TrainingName' => 'Training Name',
			'Date' => 'Date',
			'Duration' => 'Duration',
			'Location' => 'Location',
			'Trainer' => 'Trainer',
			'Category' => 'Category',
			'Participants' => 'Participants',
			'Surveys' => 'Surveys',
			'Status' => 'Status',
			'Remarks' => 'Remarks',
			'Admin' => 'Admin',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('TrainingID',$this->TrainingID);
		$criteria->compare('TrainingName',$this->TrainingName,true);
		$criteria->compare('Date',$this->Date,true);
		$criteria->compare('Duration',$this->Duration,true);
		$criteria->compare('Location',$this->Location,true);
		$criteria->compare('Trainer',$this->Trainer,true);
		$criteria->compare('Category',$this->Category,true);
		$criteria->compare('Participants',$this->Participants);
		$criteria->compare('Surveys',$this->Surveys,true);
		$criteria->compare('Status',$this->Status,true);
		$criteria->compare('Remarks',$this->Remarks,true);
		$criteria->compare('Admin',$this->Admin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}