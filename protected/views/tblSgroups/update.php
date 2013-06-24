<?php
/* @var $this TblSgroupsController */
/* @var $model TblSgroups */

$this->breadcrumbs=array(
	'Tbl Sgroups'=>array('index'),
	$model->Name=>array('view','id'=>$model->SGID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblSgroups', 'url'=>array('index')),
	array('label'=>'Create TblSgroups', 'url'=>array('create')),
	array('label'=>'View TblSgroups', 'url'=>array('view', 'id'=>$model->SGID)),
	array('label'=>'Manage TblSgroups', 'url'=>array('admin')),
);
?>

<h1>Update TblSgroups <?php echo $model->SGID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>