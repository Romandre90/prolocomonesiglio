<?php

/**
 * This is the model class for table "Utenti".
 *
 * The followings are the available columns in table 'Utenti':
 * @property string $ID
 * @property string $Nome
 * @property string $Cognome
 * @property string $Email
 * @property string $Password
 * @property integer $Pro
 * @property string $Facebook
 * @property string $Grado
 */
class Utenti extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Utenti';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Pro', 'numerical', 'integerOnly'=>true),
			array('Nome, Cognome, Password', 'length', 'max'=>25),
			array('Email, Facebook, Grado', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, Nome, Cognome, Email, Password, Pro, Facebook, Grado', 'safe', 'on'=>'search'),
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
			'Nome' => 'Nome',
			'Cognome' => 'Cognome',
			'Email' => 'Email',
			'Password' => 'Password',
			'Pro' => 'Pro',
			'Facebook' => 'Facebook',
			'Grado' => 'Grado',
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

		$criteria->compare('ID',$this->ID,true);
		$criteria->compare('Nome',$this->Nome,true);
		$criteria->compare('Cognome',$this->Cognome,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('Pro',$this->Pro);
		$criteria->compare('Facebook',$this->Facebook,true);
		$criteria->compare('Grado',$this->Grado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Utenti the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getNamesById ()
	{
		$utenti = Utenti::model()->findAll();
		$r;
		foreach ($utenti as $utente){
			$r[$utente->ID]= $utente->Nome." ".$utente->Cognome;
		}
		return $r;
	}
}
