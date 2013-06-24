<?php
/* @var $this BsservicesController */
/* @var $model Bsservices */

$this->breadcrumbs=array(
	'Bsservices'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Bsservices', 'url'=>array('index')),
	array('label'=>'Create Bsservices', 'url'=>array('create')),
	array('label'=>'Update Bsservices', 'url'=>array('update', 'id'=>$model->BSID)),
	array('label'=>'Delete Bsservices', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->BSID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bsservices', 'url'=>array('admin')),
);
?>

<h1>View Bsservices #<?php echo $model->BSID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'BSID',
		'Name',
		'Description',
		'SGID',
	),
)); ?>
