<?php
/* @var $this BookPartController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Book Parts',
);

$this->menu=array(
	array('label'=>'Create BookPart', 'url'=>array('create')),
	array('label'=>'Manage BookPart', 'url'=>array('admin')),
);
?>

<h1>Book Parts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
