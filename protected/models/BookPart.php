<?php

/**
 * This is the model class for table "book_parts".
 *
 * The followings are the available columns in table 'book_parts':
 * @property integer $id
 * @property integer $id_book
 * @property integer $id_book_section
 * @property string $content
 * @property integer $order
 *
 * The followings are the available model relations:
 * @property BookSections $idBookSection
 * @property Books $idBook
 */
class BookPart extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BookPart the static model class
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
		return 'book_parts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_book, id_book_section', 'required'),
			array('id_book, id_book_section, order', 'numerical', 'integerOnly'=>true),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_book, id_book_section, content, order', 'safe', 'on'=>'search'),
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
			'idBookSection' => array(self::BELONGS_TO, 'BookSection', 'id_book_section'),
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
			'id_book_section' => 'Id Book Section',
			'content' => 'Content',
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
		$criteria->compare('id_book_section',$this->id_book_section);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('order',$this->order);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}