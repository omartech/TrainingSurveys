<?php

/**
 * This is the model class for table "SurveyResults".
 *
 * The followings are the available columns in table 'SurveyResults':
 * @property integer $ResultsID
 * @property integer $TrainingID
 * @property integer $ParticipantID
 * @property string $Answers
 * @property string $TimeOfEntry
 *
 * The followings are the available model relations:
 * @property Trainings $training
 */
class SurveyResults extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SurveyResults the static model class
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
		return 'SurveyResults';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TrainingID, ParticipantID, Answers, TimeOfEntry', 'required'),
			array('TrainingID, ParticipantID', 'numerical', 'integerOnly'=>true),
			array('Answers', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ResultsID, TrainingID, ParticipantID, Answers, TimeOfEntry', 'safe', 'on'=>'search'),
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
			'training' => array(self::BELONGS_TO, 'Trainings', 'TrainingID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ResultsID' => 'Results',
			'TrainingID' => 'Training',
			'ParticipantID' => 'Participant',
			'Answers' => 'Answers',
			'TimeOfEntry' => 'Time Of Entry',
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

		$criteria->compare('ResultsID',$this->ResultsID);
		$criteria->compare('TrainingID',$this->TrainingID);
		$criteria->compare('ParticipantID',$this->ParticipantID);
		$criteria->compare('Answers',$this->Answers,true);
		$criteria->compare('TimeOfEntry',$this->TimeOfEntry,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}