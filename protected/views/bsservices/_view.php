<?php
/* @var $this BsservicesController */
/* @var $data Bsservices */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('BSID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->BSID), array('view', 'id'=>$data->BSID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SGID')); ?>:</b>
	<?php echo CHtml::encode($data->SGID); ?>
	<br />


</div>