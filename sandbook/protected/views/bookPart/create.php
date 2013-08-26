<?php
/* @var $this BookPartController */
/* @var $model BookPart */

$this->breadcrumbs=array(
	'Book Parts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BookPart', 'url'=>array('index')),
	array('label'=>'Manage BookPart', 'url'=>array('admin')),
);
?>

<h1>Create BookPart</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>