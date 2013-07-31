<?php

/**
 * This is the model class for table "Questions".
 *
 * The followings are the available columns in table 'Questions':
 * @property integer $QuestionID
 * @property string $QuestionName
 * @property string $Type
 */
class Questions extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Questions the static model class
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
		return 'Questions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('QuestionName, Type', 'required'),
			array('QuestionName', 'length', 'max'=>250),
			array('Type', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('QuestionID, QuestionName, Type', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'QuestionID' => 'Question',
			'QuestionName' => 'Question Name',
			'Type' => 'Type',
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

		$criteria->compare('QuestionID',$this->QuestionID);
		$criteria->compare('QuestionName',$this->QuestionName,true);
		$criteria->compare('Type',$this->Type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}