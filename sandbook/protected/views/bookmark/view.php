<?php
/* @var $this BookmarkController */
/* @var $model Bookmark */

$this->breadcrumbs=array(
	'Bookmarks'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Bookmark', 'url'=>array('index')),
	array('label'=>'Create Bookmark', 'url'=>array('create')),
	array('label'=>'Update Bookmark', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Bookmark', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bookmark', 'url'=>array('admin')),
);
?>

<h1>View Bookmark #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_bookmark_category',
		'id_user',
		'link',
		'title',
		'content',
		'date_created',
	),
)); ?>
