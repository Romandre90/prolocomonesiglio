<?php

/**
 * This is the model class for table "Discussioni".
 *
 * The followings are the available columns in table 'Discussioni':
 * @property integer $ID
 * @property string $Titolo
 * @property integer $Moderatore
 * @property string $Descrizione
 * @property string $DataCreazione
 * @property integer $Argomento
 * @property integer $Creatore
 * @property integer $Nascondi
 */
class Discussioni extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Discussioni';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Creatore', 'required'),
			array('Moderatore, Argomento, Creatore, Nascondi', 'numerical', 'integerOnly'=>true),
			array('Titolo', 'length', 'max'=>25),
			array('Descrizione, DataCreazione', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, Titolo, Moderatore, Descrizione, DataCreazione, Argomento, Creatore, Nascondi', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'Titolo' => 'Titolo',
			'Moderatore' => 'Moderatore',
			'Descrizione' => 'Descrizione',
			'DataCreazione' => 'Data Creazione',
			'Argomento' => 'Argomento',
			'Creatore' => 'Creatore',
			'Nascondi' => 'Nascondi',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('Titolo',$this->Titolo,true);
		$criteria->compare('Moderatore',$this->Moderatore);
		$criteria->compare('Descrizione',$this->Descrizione,true);
		$criteria->compare('DataCreazione',$this->DataCreazione,true);
		$criteria->compare('Argomento',$this->Argomento);
		$criteria->compare('Creatore',$this->Creatore);
		$criteria->compare('Nascondi',$this->Nascondi);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Discussioni the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
