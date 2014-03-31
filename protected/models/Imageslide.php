<?php

/**
 * This is the model class for table "imageslide".
 *
 * The followings are the available columns in table 'imageslide':
 * @property integer $id
 * @property string $image_path
 * @property string $title
 * @property string $caption
 * @property string $title_eng
 * @property string $caption_eng
 * @property string $create_date
 * @property integer $create_user_id
 * @property string $update_date
 * @property integer $del_flg
 */
class Imageslide extends CActiveRecord
{
	const image_url = '/images/imageslide/';
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Imageslide the static model class
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
		return 'imageslide';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{ 
		//var_dump(Yii::app()->controller->action->id);
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required', 'message'=>getMessage('required', $this->getAttributeLabel('title'))),
			array('title_eng', 'required', 'message'=>getMessage('required', $this->getAttributeLabel('title_eng'))),
			//array('create_user_id, del_flg', 'numerical', 'integerOnly'=>true, 'message'=>getMessage('numerical')),
			//array('image_path', 'unsafe'),
			array('image_path','file',
				//'types'=>'jpg, jpeg, png, gif',
				'mimeTypes'=>array('image/gif', 'image/jpeg', 'image/jpg', 'image/png'),
				'maxSize'=>1024*1024*2, // 2MB
				'wrongMimeType'=>getMessage('wrongTypeImage'),
				'tooLarge'=>getMessage('tooLarge','',array('number'=>2)),
				'allowEmpty' => false,
				'on'=> 'create',
				'message'=>getMessage('required', $this->getAttributeLabel('image_path')),
			),
//			array('title, caption, title_eng, caption_eng', 'length', 'max'=>45),
			array('caption, caption_eng,create_date, update_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, image_path, title, caption, title_eng, caption_eng, create_date, create_user_id, update_date, del_flg', 'safe', 'on'=>'search'),
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
      'User' => array(self::BELONGS_TO, 'User', 'create_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'image_path' => 'Hình ảnh',
			'title' => 'Tiêu đề',
			'caption' => 'Tóm tắt',
			'title_eng' => 'Title',
			'caption_eng' => 'Caption',
			'create_date' => 'Ngày tạo',
			'create_user_id' => 'User tạo dữ liệu',
			'update_date' => 'Update Date',
			'del_flg' => 'Del Flg',
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
		$criteria->compare('image_path',$this->image_path,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('caption',$this->caption,true);
		$criteria->compare('title_eng',$this->title_eng,true);
		$criteria->compare('caption_eng',$this->caption_eng,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('del_flg',$this->del_flg);
		$criteria->addCondition("del_flg = 0");

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
	/*
	 * For admin
	 * adminImageSlideSearch
	 */
	public function adminImageSlideSearch() {
		$criteria		= new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('title', $this->title, true);
		$criteria->compare('title_eng', $this->title_eng, true);
		$criteria->addCondition("del_flg = 0");

		return new CActiveDataProvider($this, array(
				'criteria'=>$criteria,
				'pagination'=>false,
				/*'sort'=>array(
	            'defaultOrder'=>'title ASC',
			),*/
		));
	}
	
	/*
	 * FRONT
	 */
	public function getImageSlideList () {
		$image_slide_list = self::model()->findAll(array(
			'condition' => 'del_flg = :del_flg',
	      	'order' => 'create_date DESC',
	      	'params' => array(	':del_flg' => 0)
	    ));
	   return $image_slide_list; 
	}
	
	
}