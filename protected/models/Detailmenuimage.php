<?php

/**
 * This is the model class for table "detailmenuimage".
 *
 * The followings are the available columns in table 'detailmenuimage':
 * @property integer $id
 * @property integer $menu_id
 * @property string $caption
 * @property string $caption_eng
 * @property string $create_date
 * @property integer $create_user
 * @property string $update_date
 * @property integer $del_flg
 * @property integer $public_flg
 * @property integer $feature_flg
 */
class Detailmenuimage extends CActiveRecord
{
	const image_url = '/images/detailmenuimage/';
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Detailmenuimage the static model class
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
		return 'detailmenuimage';
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
			array('menu_id, create_user, del_flg, public_flg, feature_flg', 'numerical', 'integerOnly'=>true),
//			array('caption, caption_eng', 'length', 'max'=>45),
			array('create_date, update_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, menu_id, caption, caption_eng, create_date, create_user, image_path, update_date, del_flg, public_flg, feature_flg', 'safe', 'on'=>'search'),
		
			array('image_path','file',
				//'types'=>'jpg, jpeg, png, gif',
				'mimeTypes'=>array('image/gif', 'image/jpeg', 'image/jpg', 'image/png'),
				'maxSize'=>1024*1024*2, // 2MB
				'wrongMimeType'=>getMessage('wrongTypeImage'),
				'tooLarge'=>getMessage('tooLarge','',array('number'=>2)),			
				'message'=>getMessage('required', $this->getAttributeLabel('image_path')),
				'allowEmpty' => false,
				'on'=> 'create',
			),
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
      'Menu' => array(self::BELONGS_TO, 'Menu', 'menu_id'),
      'User' => array(self::BELONGS_TO, 'User', 'create_user'),
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
			'caption' => 'Chú thích',
			'caption_eng' => 'Caption',
			'image_path' => 'Hình Ảnh',
			'create_date' => 'Ngày tạo',
			'create_user' => 'User tạo dữ liệu',
			'update_date' => 'Update Date',
			'del_flg' => 'Del Flg',
			'public_flg' => 'Công khai',
			'feature_flg' => 'Vị trí hiển thị',
		);
	}
	
 	/**
	* @return string the URL that shows the detail of the post
	*/
	public function getUrl($id, $name, $name_detail='')
	{
		if($name_detail != ''){
			return Yii::app()->createAbsoluteUrl('Detailmenuimage/view', array(
			'id'=>$id,
			'name'=>$name,
			'name_detail'=>$name_detail
			));
		} else {
			return Yii::app()->createAbsoluteUrl('Detailmenuimage/list', array(
			'id_menu'=>$id,
			'name'=>$name,
			));
		}
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
    $menu_id = $_GET['menu_id'];
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('menu_id',$menu_id);
		$criteria->compare('image_path',$this->image_path,true);
		$criteria->compare('caption',$this->caption,true);
		$criteria->compare('caption_eng',$this->caption_eng,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_user',$this->create_user);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('del_flg',$this->del_flg);
		$criteria->compare('public_flg',$this->public_flg);
		$criteria->compare('feature_flg',$this->feature_flg);
		$criteria->addCondition("del_flg = 0");

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	/*
	 * FRONT
	  * get data news
	  */
	
	  public function getDetailMenuImage($detail_menu_image_id){
	    $detail_menu_image_Data = self::model()->findByAttributes(array('del_flg' => 0, 'id' => $detail_menu_image_id));	
	    return $detail_menu_image_Data;	
	  }
}