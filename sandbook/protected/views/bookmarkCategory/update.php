<?php
/* @var $this BookmarkCategoryController */
/* @var $model BookmarkCategory */

$this->breadcrumbs=array(
	'Bookmark Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BookmarkCategory', 'url'=>array('index')),
	array('label'=>'Create BookmarkCategory', 'url'=>array('create')),
	array('label'=>'View BookmarkCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BookmarkCategory', 'url'=>array('admin')),
);
?>

<h1>Update BookmarkCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>