<?php
/* @var $this BookSectionController */
/* @var $model BookSection */

$this->breadcrumbs=array(
	'Book Sections'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BookSection', 'url'=>array('index')),
	array('label'=>'Manage BookSection', 'url'=>array('admin')),
);
?>

<h1>Create BookSection</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>