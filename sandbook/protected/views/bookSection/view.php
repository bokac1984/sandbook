<?php
/* @var $this BookSectionController */
/* @var $model BookSection */

$this->breadcrumbs=array(
	'Book Sections'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List BookSection', 'url'=>array('index')),
	array('label'=>'Create BookSection', 'url'=>array('create')),
	array('label'=>'Update BookSection', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BookSection', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BookSection', 'url'=>array('admin')),
);
?>

<h1>View BookSection #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_book',
		'title',
		'order',
	),
)); ?>
