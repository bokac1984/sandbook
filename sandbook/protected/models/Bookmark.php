<?php

/**
 * This is the model class for table "bookmark".
 *
 * The followings are the available columns in table 'bookmark':
 * @property integer $id
 * @property integer $id_bookmark_category
 * @property integer $id_user
 * @property string $link
 * @property string $title
 * @property string $content
 * @property string $date_created
 *
 * The followings are the available model relations:
 * @property User $idUser
 * @property BookmarkCategory $idBookmarkCategory
 * @property Part[] $parts
 */
class Bookmark extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bookmark the static model class
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
		return 'bookmark';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_bookmark_category, id_user, link', 'required'),
			array('id_bookmark_category, id_user', 'numerical', 'integerOnly'=>true),
			array('link, title', 'length', 'max'=>500),
			array('content, date_created', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_bookmark_category, id_user, link, title, content, date_created', 'safe', 'on'=>'search'),
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
			'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
			'idBookmarkCategory' => array(self::BELONGS_TO, 'BookmarkCategory', 'id_bookmark_category'),
			'parts' => array(self::HAS_MANY, 'Part', 'id_bookmark'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_bookmark_category' => 'Id Bookmark Category',
			'id_user' => 'Id User',
			'link' => 'Link',
			'title' => 'Title',
			'content' => 'Content',
			'date_created' => 'Date Created',
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
		$criteria->compare('id_bookmark_category',$this->id_bookmark_category);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('date_created',$this->date_created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}