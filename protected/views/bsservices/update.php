<?php
/* @var $this BsservicesController */
/* @var $model Bsservices */

$this->breadcrumbs=array(
	'Bsservices'=>array('index'),
	$model->Name=>array('view','id'=>$model->BSID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bsservices', 'url'=>array('index')),
	array('label'=>'Create Bsservices', 'url'=>array('create')),
	array('label'=>'View Bsservices', 'url'=>array('view', 'id'=>$model->BSID)),
	array('label'=>'Manage Bsservices', 'url'=>array('admin')),
);
?>

<h1>Update Bsservices <?php echo $model->BSID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>