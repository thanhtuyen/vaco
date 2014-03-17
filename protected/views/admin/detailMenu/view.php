<?php
/* @var $this DetailMenuController */
/* @var $model detailMenu */

$this->breadcrumbs=array(
	'Detail Menus'=>array('index'),
	$model->title,
);

//$this->menu=array(
//	array('label'=>'List detailMenu', 'url'=>array('index')),
//	array('label'=>'Create detailMenu', 'url'=>array('create')),
//	array('label'=>'Update detailMenu', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete detailMenu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage detailMenu', 'url'=>array('admin')),
//);
?>

<?php
	/*if(app()->detailMenu->hasFlash('error')){
	  echo app()->detailMenu->getFlash('error');
	} elseif(app()->detailMenu->hasFlash('warning')){
	  echo app()->detailMenu->getFlash('warning');
	} elseif(app()->detailMenu->hasFlash('info')){
	  echo app()->detailMenu->getFlash('info');
	} elseif(app()->detailMenu->hasFlash('success')){
	  echo '<div class="alert alert-success">'.app()->detailMenu->getFlash('success').'</div>';
	}*/
?>

<h1><?php echo str_replace("###TITLE###", 'Chi Tiết Menu', Constants::$listTitleForm['form_view']) .' ' . $model->id; ?></h1>

<div class="view_user">
	<div style="text-align:right"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/thumbnails/bedit.png',"bCreate",array("class"=>"icon_edit")), Yii::app()->createUrl('/detailmenu/update/'.$model->id)) ;?></div>
<?php
$detail = CHtml::decode($model->detail);
$this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
    array('name' => 'menu_id',
      	'value' => $model->Menu->menu_name),
    'title',
    'title_eng',
	'caption',
    'caption_eng',
    'image_path',
//    array('name' => 'detail',
//          'value'=> $model->detail),
//    'detail_eng',

	'list_file_attach',
    array('name' => 'create_date',
      'value' => $model->create_date? $model->create_date:""),

    array('name' => 'update_date',
      'value' => $model->update_date? $model->update_date:''),

  ),
)); ?>
  <table class="detail-view table table-striped table-condensed" id="yw0">
    <tr class="odd">
      <th>
        Chi tiết
      </th>
      <td>
        <?php echo CHtml::decode($model->detail);?>
      </td>
    </tr>
    <tr class="odd">
      <th>Detail Eng</th>
      <td>
        <?php echo CHtml::decode($model->detail_eng);?>
      </td>
    </tr>

  </table>
  <div >Chi tiết</div>

  <?php //echo CHtml::decode($model->detail_eng);?>
</div>

<style>
  .detail-view_special {
    text-align:right;
    width:160px;
    font-weight:bold;
    background-color:#FFFFFF !important;
    border-top-style:none !important;
    color:#999999 !important;
    padding-right:20px !important;
    margin-top: 0px !important;
  }

  .table {
    margin-bottom: 5px !important;
    }
  .detail-view_special_content{
    background-color:#FFFFFF !important;
    border-top-style:none !important;
    float: left;
  }
</style>