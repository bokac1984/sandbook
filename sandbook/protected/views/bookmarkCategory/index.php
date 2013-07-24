<?php
/* @var $this BookmarkCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bookmark Categories',
);

$this->menu=array(
	array('label'=>'Create BookmarkCategory', 'url'=>array('create')),
	array('label'=>'Manage BookmarkCategory', 'url'=>array('admin')),
);
?>

<h1>Bookmark Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
