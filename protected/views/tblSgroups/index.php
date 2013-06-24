<?php
/* @var $this TblSgroupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Sgroups',
);

$this->menu=array(
	array('label'=>'Create TblSgroups', 'url'=>array('create')),
	array('label'=>'Manage TblSgroups', 'url'=>array('admin')),
);
?>

<h1>Tbl Sgroups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
