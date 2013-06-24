<?php
/* @var $this BsservicesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bsservices',
);

$this->menu=array(
	array('label'=>'Create Bsservices', 'url'=>array('create')),
	array('label'=>'Manage Bsservices', 'url'=>array('admin')),
);
?>

<h1>Bsservices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
