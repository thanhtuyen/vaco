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
			array('menu_id, create_user, del_flg, public_flg, feature_flg', 'numerical', 'integerOnly'=>true),
			array('caption, caption_eng', 'length', 'max'=>45),
			array('create_date, update_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, menu_id, caption, caption_eng, create_date, create_user, update_date, del_flg, public_flg, feature_flg', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'menu_id' => 'Menu',
			'caption' => 'Caption',
			'caption_eng' => 'Caption Eng',
			'create_date' => 'Create Date',
			'create_user' => 'Create User',
			'update_date' => 'Update Date',
			'del_flg' => 'Del Flg',
			'public_flg' => 'Public Flg',
			'feature_flg' => 'Feature Flg',
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
		$criteria->compare('caption',$this->caption,true);
		$criteria->compare('caption_eng',$this->caption_eng,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_user',$this->create_user);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('del_flg',$this->del_flg);
		$criteria->compare('public_flg',$this->public_flg);
		$criteria->compare('feature_flg',$this->feature_flg);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}