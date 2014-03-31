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
 * @property integer $feature_flg
 */
class Detailmenu extends CActiveRecord
{
  const S_THUMBNAIL = '/images/detailmenu/';
  const file_url = '/uploadfile/detailmenu/';
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Detailmenu the static model class
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
      array('menu_id','required','message'=>getMessage('required', $this->getAttributeLabel('menu_id'))),
      array('title','required','message'=>getMessage('required', $this->getAttributeLabel('title'))),
      array('title_eng','required','message'=>getMessage('required', $this->getAttributeLabel('title_eng'))),
      array('caption','required','message'=>getMessage('required', $this->getAttributeLabel('caption'))),
      array('caption_eng','required','message'=>getMessage('required', $this->getAttributeLabel('caption_eng'))),
      array('detail','required','message'=>getMessage('required', $this->getAttributeLabel('detail'))),
      array('detail_eng','required','message'=>getMessage('required', $this->getAttributeLabel('detail_eng'))),
      array('id, menu_id, create_user, del_flg', 'numerical', 'integerOnly'=>true),
//			array('title, title_eng', 'length', 'max'=>45),
      array('image_path', 'file',
        //'types' => 'gif, jpg, png',
        'mimeTypes'=>array('image/gif','image/jpeg', 'image/jpg', 'image/png'),
        'maxSize' => 1024 * 1024 * 2,
        'wrongMimeType'=>getMessage('wrongTypeImage'),
        'tooLarge'=>getMessage('tooLarge','',array('number'=>2)),
        'message'=>getMessage('required', $this->getAttributeLabel('image_path')),
        'allowEmpty' => true, 'on' => 'create, update' ),

      array('list_file_attach', 'file',
        //'types'=>'doc, pdf, docx',
        'mimeTypes'=>array('application/pdf','application/xls', 'application/msword', 'text/plain', 'application/vnd.ms-excel', 'application/vnd.oasis.opendocument.text', 'application/vnd.oasis.opendocument.spreadsheet'),
        'maxSize'=>1024*1024*10,
        'wrongMimeType'=>getMessage('wrongTypeFile'),
        'tooLarge'=>getMessage('tooLarge','',array('number'=>10)),
        'maxFiles' => 5,
        'allowEmpty'=>true ),
			array('title, caption, detail, title_eng, caption_eng, detail_eng, create_date, update_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, menu_id, title, caption, detail, title_eng, caption_eng, detail_eng, image_path, list_file_attach, create_date, create_user, update_date, del_flg, feature_flg', 'safe', 'on'=>'search'),
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
      'title' => 'Tiêu đề',
      'caption' => 'Tóm tắt',
      'detail' => 'Chi tiết',
      'title_eng' => 'Title',
      'caption_eng' => 'Caption',
      'detail_eng' => 'Detail',
      'image_path' => 'Hình ảnh',
      'list_file_attach' => 'Danh sách tập tin',
      'create_date' => 'Ngày tạo',
      'create_user' => 'User tạo dữ liệu',
      'update_date' => 'Update Date',
      'del_flg' => 'Del Flg',
      'feature_flg' => 'Vị trí hiển thị',
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
    $criteria->compare('image_path',$this->image_path,true);
    $criteria->compare('list_file_attach',$this->list_file_attach,true);
    $criteria->compare('create_date',$this->create_date,true);
    $criteria->compare('create_user',$this->create_user);
    $criteria->compare('update_date',$this->update_date,true);
    $criteria->addCondition("del_flg = 0");

    return new CActiveDataProvider($this, array(
      'criteria'=>$criteria,
    ));
  }

  public function getListMenuIdInDetail()
  {
    $del_flg = 0;
    $detailmenus = self::model()->findAllByAttributes(array('del_flg'=>$del_flg));
    $arrDetailMenu = array();
    foreach ($detailmenus as $detailmenu)
    {
      $arrDetailMenu[$detailmenu->menu_id] = $detailmenu->menu_id;
    }

    return $arrDetailMenu;
  }

  public function getListMenu($id = '')
  {
    $menu_type = Menu::NOT_LIST;
    $listMenuId = detailMenu::getListMenuIdInDetail();
    if($id){
      unset($listMenuId[$id]);
    }
    $listMenu = Yii::app()->db->createCommand()
      ->select('*')
      ->from('menu')
      ->where('menu_type=:type', array(':type'=>$menu_type))
      ->andWhere('parent_menu_id=0')
      ->andWhere('del_flg = 0')
      ->andwhere(array('not in', 'id', $listMenuId))
      ->queryAll();

    $arrayListMenu = array();
    foreach($listMenu as $menu) {
      $arrayListMenu[$menu['id']] =  $menu['menu_name'];
    }

    return $arrayListMenu;
  }
}