<?php
/* @var $this BookSectionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Book Sections',
);

$this->menu=array(
	array('label'=>'Create BookSection', 'url'=>array('create')),
	array('label'=>'Manage BookSection', 'url'=>array('admin')),
);
?>

<h1>Book Sections</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
