<?php
/* @var $this TblSgroupsController */
/* @var $model TblSgroups */

$this->breadcrumbs=array(
	'Tbl Sgroups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblSgroups', 'url'=>array('index')),
	array('label'=>'Manage TblSgroups', 'url'=>array('admin')),
);
?>

<h1>Create TblSgroups</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>