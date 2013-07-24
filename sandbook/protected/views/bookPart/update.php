<?php
/* @var $this BookPartController */
/* @var $model BookPart */

$this->breadcrumbs=array(
	'Book Parts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BookPart', 'url'=>array('index')),
	array('label'=>'Create BookPart', 'url'=>array('create')),
	array('label'=>'View BookPart', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BookPart', 'url'=>array('admin')),
);
?>

<h1>Update BookPart <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>