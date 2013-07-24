<?php
/* @var $this BookSectionController */
/* @var $model BookSection */

$this->breadcrumbs=array(
	'Book Sections'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BookSection', 'url'=>array('index')),
	array('label'=>'Create BookSection', 'url'=>array('create')),
	array('label'=>'View BookSection', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BookSection', 'url'=>array('admin')),
);
?>

<h1>Update BookSection <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>