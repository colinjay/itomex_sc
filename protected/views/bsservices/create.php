<?php
/* @var $this BsservicesController */
/* @var $model Bsservices */

$this->breadcrumbs=array(
	'Bsservices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bsservices', 'url'=>array('index')),
	array('label'=>'Manage Bsservices', 'url'=>array('admin')),
);
?>

<h1>Create Bsservices</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>