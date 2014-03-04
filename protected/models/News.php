<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $id
 * @property integer $menu_id
 * @property string $title
 * @property string $caption
 * @property string $detail
 * @property string $title_eng
 * @property string $caption_eng
 * @property string $detail_eng
 * @property string $thumb_image_path
 * @property string $listfile_attach
 * @property integer $create_user_id
 * @property string $create_date
 * @property integer $feature_flag
 * @property string $update_date
 * @property integer $is_public
 * @property integer $del_flg
 */
class News extends CActiveRecord
{
	const image_url = '/images/news/';
	const file_url = '/uploadfile/news/';
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return News the static model class
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
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu_id','required','message'=>getMessage('required', $this->getAttributeLabel('menu_id'))),
			array('title','required','message'=>getMessage('required', $this->getAttributeLabel('title'))),
			array('title_eng','required','message'=>getMessage('required', $this->getAttributeLabel('title_eng'))),
			array('create_user_id, feature_flag, is_public, del_flg', 'numerical', 'integerOnly'=>true),
			array('title, title_eng, thumb_image_path', 'length', 'max'=>45),
			array('caption, detail, caption_eng, detail_eng, create_date, update_date', 'safe'),
			
			array('thumb_image_path', 'unsafe'),
			array('thumb_image_path', 'file',
            	'types' => 'jpg, jpeg, png, gif',
            	'maxSize' => 1024 * 1024 * 2,
            	'wrongType'=> getMessage('wrongTypeImage'), 
            	'tooLarge' => getMessage('tooLarge','',array('number'=>2)),
            	'allowEmpty' => true, 'on' => 'create, update'),

			array('listfile_attach', 'file',
        		'types'=>'doc, pdf, docx',
        		'maxSize'=>1024 * 1024 * 10,
        		'wrongType'=>getMessage('wrongTypeFile'),
        		'tooLarge'=>getMessage('tooLarge','',array('number'=>10)),
        		'allowEmpty'=>true, 'on' => 'create, update'),
      
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, menu_id, title, caption, detail, title_eng, caption_eng, detail_eng, thumb_image_path, listfile_attach, create_user_id, create_date, feature_flag, update_date, is_public, del_flg', 'safe', 'on'=>'search'),
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
			'menu' => array(self::HAS_MANY, 'menu', 'menu_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'menu_id' => 'Menu',
			'title' => 'Tiêu đề',
			'caption' => 'Chú thích',
			'detail' => 'Nội dung',
			'title_eng' => 'Title',
			'caption_eng' => 'Caption',
			'detail_eng' => 'Content',
			'thumb_image_path' => 'Hình ảnh',
			'listfile_attach' => 'Tập tin',
			'create_user_id' => 'Create User',
			'create_date' => 'Create Date',
			'feature_flag' => 'Feature Flag',
			'update_date' => 'Update Date',
			'is_public' => 'Is Public',
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
		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('caption',$this->caption,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('title_eng',$this->title_eng,true);
		$criteria->compare('caption_eng',$this->caption_eng,true);
		$criteria->compare('detail_eng',$this->detail_eng,true);
		$criteria->compare('thumb_image_path',$this->thumb_image_path,true);
		$criteria->compare('listfile_attach',$this->listfile_attach,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('feature_flag',$this->feature_flag);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('is_public',$this->is_public);
		$criteria->compare('del_flg',$this->del_flg);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}