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
 * @property string $list_file_attach
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
      array('caption','required','message'=>getMessage('required', $this->getAttributeLabel('caption'))),
      array('caption_eng','required','message'=>getMessage('required', $this->getAttributeLabel('caption_eng'))),
      array('detail','required','message'=>getMessage('required', $this->getAttributeLabel('detail'))),
      array('detail_eng','required','message'=>getMessage('required', $this->getAttributeLabel('detail_eng'))),

      array('create_user_id, feature_flag, is_public, del_flg', 'numerical', 'integerOnly'=>true),
			//array('title, title_eng', 'length', 'max'=>45),
			array('caption, detail, caption_eng, detail_eng, create_date, update_date', 'safe'),
			
			//array('thumb_image_path', 'unsafe'),
			array('thumb_image_path', 'file',
            	//'types' => 'jpg, jpeg, png, gif',
              	'mimeTypes'=>array('image/gif','image/jpeg', 'image/jpg', 'image/png'),
				'wrongMimeType'=> getMessage('wrongTypeImage'),
              	'maxSize' => 1024 * 1024 * 2,
            	'tooLarge' => getMessage('tooLarge','',array('number'=>2)),
            	'allowEmpty' => true,
				'on' => 'create, update'),
			array('list_file_attach', 'file',
        		//'types'=>'doc, pdf, docx, xls',
				'mimeTypes'=>array('application/pdf', 'application/msword', 'text/plain', 'application/vnd.ms-excel', 'application/vnd.oasis.opendocument.text', 'application/vnd.oasis.opendocument.spreadsheet'),
        		'maxSize'=>1024 * 1024 * 10,
        		'wrongMimeType'=>getMessage('wrongTypeFile'),
        		'tooLarge'=>getMessage('tooLarge','',array('number'=>10)),
				'maxFiles' => 5,
        		'allowEmpty'=>true,
				'on' => 'create, update'),
      
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, menu_id, title, caption, detail, title_eng, caption_eng, detail_eng, thumb_image_path, list_file_attach, create_user_id, create_date, feature_flag, update_date, is_public, del_flg', 'safe', 'on'=>'search'),
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
			'Menu' => array(self::BELONGS_TO, 'menu', 'menu_id'),
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
			'menu_id' => 'Menu',
			'title' => 'Tiêu đề',
			'caption' => 'Tóm tắt',
			'detail' => 'Nội dung',
			'title_eng' => 'Title',
			'caption_eng' => 'Caption',
			'detail_eng' => 'Content',
			'thumb_image_path' => 'Hình ảnh',
			'list_file_attach' => 'Tập tin',
			'create_user_id' => 'User tạo dữ liệu',
			'create_date' => 'Ngày tạo',
			'feature_flag' => 'Vị trí hiển thị',
			'update_date' => 'Update Date',
			'is_public' => 'Công khai',
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
    $menu_id = $_GET['menu_id'];
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('menu_id',$menu_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('caption',$this->caption,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('title_eng',$this->title_eng,true);
		$criteria->compare('caption_eng',$this->caption_eng,true);
		$criteria->compare('detail_eng',$this->detail_eng,true);
		$criteria->compare('thumb_image_path',$this->thumb_image_path,true);
		$criteria->compare('list_file_attach',$this->list_file_attach,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('feature_flag',$this->feature_flag);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('is_public',$this->is_public);
		$criteria->compare('del_flg',$this->del_flg);
		$criteria->addCondition("del_flg = 0");

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

  /*
  * get data for front end
  */

  public function getListNews($menu_id){
    $listData = News::model()->findAllByAttributes(array('del_flg' => 0, 'menu_id' => $menu_id),
    												array('order' => 'create_date DESC'));

    return $listData;

  }
  
	/*
  	 * Get menu from HOME
  	 */
  	public function getMenuForHome($menu_type=1, $is_public=0, $feature_flag=2) {
  		if($menu_type == Menu::LIST_MENU){
	  		$sql = "SELECT menu.* FROM news, menu WHERE news.menu_id = menu.id AND news.del_flg = 0 AND is_public = :is_public AND feature_flag = :feature_flag AND menu.del_flg = 0 AND menu.menu_type = :menu_type GROUP BY menu.id ORDER BY menu.priority ASC";
	  		$list_news = Menu::model()->findAllBySql($sql, array(':is_public'=>$is_public,
	  															':feature_flag'=>$feature_flag,
	  															':menu_type'=>$menu_type)); 
  		} else if($menu_type == Menu::NOT_LIST){
  			$sql = "SELECT menu.* FROM detailmenu dm, menu WHERE dm.menu_id = menu.id AND dm.del_flg = 0 AND is_public = :is_public AND feature_flag = :feature_flag AND menu.del_flg = 0 AND menu.menu_type = :menu_type GROUP BY menu.id ORDER BY menu.priority ASC";
	  		$list_news = Menu::model()->findAllBySql($sql, array(':is_public'=>$is_public,
	  															':feature_flag'=>$feature_flag,
	  															':menu_type'=>$menu_type)); 
  		} else if($menu_type == Menu::TYPE_IMAGE){
  			$sql = "SELECT menu.* FROM detailmenuimage dmi, menu WHERE dmi.menu_id = menu.id AND dmi.del_flg = 0 AND is_public = :is_public AND feature_flag = :feature_flag AND menu.del_flg = 0 AND menu.menu_type = :menu_type GROUP BY menu.id ORDER BY menu.priority ASC";
	  		$list_news = Menu::model()->findAllBySql($sql, array(':is_public'=>$is_public,
	  															':feature_flag'=>$feature_flag,
	  															':menu_type'=>$menu_type)); 
  		}
  		return $list_news;
  	}

}