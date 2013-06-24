<?php
/* @var $this TblSgroupsController */
/* @var $data TblSgroups */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SGID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SGID), array('view', 'id'=>$data->SGID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />


</div>