<?php

/**
 * This is the model class for table "menu".
 *
 * The followings are the available columns in table 'menu':
 * @property integer $id
 * @property integer $parent_menu_id
 * @property string $menu_name
 * @property string $menu_name_eng
 * @property integer $menu_type
 * @property string $create_date
 * @property integer $create_user_id
 * @property string $update_date
 * @property integer $del_flg
 */
class Menu extends CActiveRecord
{
  	const LIST_MENU = 1;
	const NOT_LIST = 2;
	const TYPE_IMAGE = 3;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Menu the static model class
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
		return 'menu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent_menu_id','required','message'=>getMessage('required', $this->getAttributeLabel('parent_menu_id'))),
			array('id, parent_menu_id, menu_type, priority, create_user_id, del_flg', 'numerical', 'integerOnly'=>true),
			array('menu_name, menu_name_eng', 'length', 'max'=>45),
			array('create_date, update_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, parent_menu_id, menu_name, menu_name_eng, menu_type, priority, create_date, create_user_id, update_date, del_flg', 'safe', 'on'=>'search'),
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
      		'detailmenu' => array(self::HAS_ONE, 'Detaimenu', 'menu_id'),
      		'parent' => array(self::BELONGS_TO, 'Menu', 'parent_menu_id'),
          	'menu_child'=> array(self::HAS_MANY, 'Menu', 'parent_menu_id', 'order'=> 'id ASC'),
			'news' => array(self::HAS_MANY, 'news', 'menu_id'),
			'User' => array(self::BELONGS_TO, 'User', 'create_user_id'),
			'detailMenuImage' => array(self::HAS_MANY, 'Detailmenuimage', 'menu_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'parent_menu_id' => 'Parent Menu',
			'menu_name' => 'Tên Menu',
			'menu_name_eng' => 'Menu Name',
			'menu_type' => 'Loại menu',
			'priority'	=> 'Độ ưu tiên hiển thị',
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
		$criteria->compare('parent_menu_id',$this->parent_menu_id);
		$criteria->compare('menu_name',$this->menu_name,true);
		$criteria->compare('menu_name_eng',$this->menu_name_eng,true);
		$criteria->compare('menu_type',$this->menu_type);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->addCondition("del_flg = 0");

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
  public static function findMenu($parent_id = 0, $type = ""){
  	if ($type != "")
  		$categories = self::model()->findAllByAttributes(array('parent_menu_id' => $parent_id,
  																'menu_type' => $type,
  																'del_flg' => 0));
  	else
    	$categories = self::model()->findAllByAttributes(array('parent_menu_id' => $parent_id,
    															'del_flg' => 0));
    return $categories;
  }
  public static function listCategory($id = 0, $type = ""){
  	if ($type != "")
  		$categories = self::findMenu($id, $type);
  	else
    	$categories = self::findMenu($id);

    if ($categories == null){
      // $cate = self::model()->findByPk($id);
      // return array($cate->id => '--'.$cate->name);
    }
    $trees = array();
    foreach ($categories as $category){
      $trees = $trees + array($category->id => $category->menu_name) + self::listCategory($category->id);

    }

    foreach ($trees as $key => $value){
      $trees[$key] = '--'.$value;
    }

    return $trees;
  }

  public function getListMenuType()
  {
    return array(
      self::LIST_MENU => 'List menu',
      self::NOT_LIST => 'Single menu',
      self::TYPE_IMAGE => 'Menu image',
    );
  }

  public static function findTreeMenu($id = 0){
    $categories = self::findMenu($id);
    if ($categories == null)
      return;
    $tree = array();
    foreach ($categories as $category)
      $tree[] = array(
        'text' => CHtml::link(CHtml::encode($category['menu_name'].'  ('.$category['menu_name_eng'].')'), array('view', 'id'=>$category['id'])),
        'children' => self::findTreeMenu($category->attributes['id'])
      );
    return $tree;
  }

  public function getParentName($parent_menu_id){
    if ($parent_menu_id == 0)
      return "Root";
    $model = Menu::model()->findByPk($parent_menu_id);
    if($model===null)
      throw new CHttpException(404,'The requested page does not exist.');
    return $model->menu_name;
  }

  public function getNameMenuType($type){
    $list_menu_type  =$this->getListMenuType();
    return $list_menu_type[$type];
  }
/*
 * get data for front
 */
  public function getMenuName($id)
  {
    $menu = self::model()->findByPk($id);
    return $menu;
  }

  public function getTypeMenu($id){
    $menu = self::model()->findByPk($id);
    return $menu->menu_type;
  }
  
  /*
   * get info of sub menu
   */
  public function getMenuInfoId ($id){
  	$menu_info = self::model()->find('id=:id AND del_flg = 0', array(':id' => $id)); 
  	return $menu_info;
  }
	
  	

}