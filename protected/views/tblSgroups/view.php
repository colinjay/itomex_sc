<?php
/* @var $this TblSgroupsController */
/* @var $model TblSgroups */

$this->breadcrumbs=array(
	'Tbl Sgroups'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List TblSgroups', 'url'=>array('index')),
	array('label'=>'Create TblSgroups', 'url'=>array('create')),
	array('label'=>'Update TblSgroups', 'url'=>array('update', 'id'=>$model->SGID)),
	array('label'=>'Delete TblSgroups', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SGID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblSgroups', 'url'=>array('admin')),
);
?>

<h1>View TblSgroups #<?php echo $model->SGID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SGID',
		'Name',
	),
)); ?>
