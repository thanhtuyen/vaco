<?php

/**
 * This is the model class for table "detailmenu".
 *
 * The followings are the available columns in table 'detailmenu':
 * @property integer $id
 * @property integer $menu_id
 * @property string $title
 * @property string $caption
 * @property string $detail
 * @property string $title_eng
 * @property string $caption_eng
 * @property string $detail_eng
 * @property string $image_path
 * @property string $list_file_attach
 * @property string $create_date
 * @property integer $create_user
 * @property string $update_date
 * @property integer $del_flg
 */
class detailMenu extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return detailMenu the static model class
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
		return 'detailmenu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id, menu_id, create_user, del_flg', 'numerical', 'integerOnly'=>true),
			array('title, title_eng, image_path, list_file_attach', 'length', 'max'=>45),
      array('image_path', 'file',
        'types' => 'gif, jpg, png',
        'maxSize' => 1024 * 1024 * 2,
        'wrongType'=>'Please upload only images in the format jpg, gif, png',
        'tooLarge' => 'The file was larger than 2MB. Please upload a smaller file.',
        'allowEmpty' => true ),
      array('list_file_attach', 'file',
        'types'=>'doc, pdf, docx',
        'maxSize'=>1024*1024*2,
        'wrongType'=>'Please upload only cv in the format doc, pdf, docx',
        'tooLarge'=>'The file was larger than 2MB. Please upload a smaller file.',
        'allowEmpty'=>true),

			array('caption, detail, caption_eng, detail_eng, create_date, update_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, menu_id, title, caption, detail, title_eng, caption_eng, detail_eng, image_path, list_file_attach, create_date, create_user, update_date, del_flg', 'safe', 'on'=>'search'),
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
      'Menu' => array(self::HAS_ONE, 'Menu', 'menu_id'),
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
			'title' => 'Title',
			'caption' => 'Caption',
			'detail' => 'detail',
			'title_eng' => 'Title Eng',
			'caption_eng' => 'Caption Eng',
			'detail_eng' => 'Detail Eng',
			'image_path' => 'Image Path',
			'list_file_attach' => 'List File Attach',
			'create_date' => 'Create Date',
			'create_user' => 'Create User',
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
		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('caption',$this->caption,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('title_eng',$this->title_eng,true);
		$criteria->compare('caption_eng',$this->caption_eng,true);
		$criteria->compare('detail_eng',$this->detail_eng,true);
		$criteria->compare('image_path',$this->image_path,true);
		$criteria->compare('list_file_attach',$this->list_file_attach,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_user',$this->create_user);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('del_flg',$this->del_flg);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}