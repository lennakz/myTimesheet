<?php
/* @var $this JobController */
/* @var $model Job */

$this->breadcrumbs=array(
	'Jobs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

<div class="container">
	<h1 class="text-center">Update Job <?php echo $model->id; ?></h1>
	
	<div class="job-form">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
</div>