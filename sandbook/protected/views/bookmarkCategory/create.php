<?php
/* @var $this BookmarkCategoryController */
/* @var $model BookmarkCategory */

$this->breadcrumbs=array(
	'Bookmark Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BookmarkCategory', 'url'=>array('index')),
	array('label'=>'Manage BookmarkCategory', 'url'=>array('admin')),
);
?>

<h1>Create BookmarkCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>