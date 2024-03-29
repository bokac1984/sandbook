<?php

/**
 * This is the model class for table "book_section".
 *
 * The followings are the available columns in table 'book_section':
 * @property integer $id
 * @property integer $id_book
 * @property string $title
 * @property integer $order
 *
 * The followings are the available model relations:
 * @property BookPart[] $bookParts
 * @property Book $idBook
 */
class BookSection extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BookSection the static model class
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
		return 'book_section';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_book', 'required'),
			array('id_book, order', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_book, title, order', 'safe', 'on'=>'search'),
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
			'bookParts' => array(self::HAS_MANY, 'BookPart', 'id_book_section'),
			'idBook' => array(self::BELONGS_TO, 'Book', 'id_book'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_book' => 'Id Book',
			'title' => 'Title',
			'order' => 'Order',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('id_book',$this->id_book);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('order',$this->order);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}