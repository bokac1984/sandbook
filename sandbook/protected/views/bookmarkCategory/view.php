<?php
/* @var $this BookmarkCategoryController */
/* @var $model BookmarkCategory */

$this->breadcrumbs=array(
	'Bookmark Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BookmarkCategory', 'url'=>array('index')),
	array('label'=>'Create BookmarkCategory', 'url'=>array('create')),
	array('label'=>'Update BookmarkCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BookmarkCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BookmarkCategory', 'url'=>array('admin')),
);
?>

<h1>View BookmarkCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
