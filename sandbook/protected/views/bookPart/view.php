<?php
/* @var $this BookPartController */
/* @var $model BookPart */

$this->breadcrumbs=array(
	'Book Parts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BookPart', 'url'=>array('index')),
	array('label'=>'Create BookPart', 'url'=>array('create')),
	array('label'=>'Update BookPart', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BookPart', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BookPart', 'url'=>array('admin')),
);
?>

<h1>View BookPart #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_book',
		'id_book_section',
		'content',
		'order',
	),
)); ?>
