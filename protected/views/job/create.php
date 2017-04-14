<?php
/* @var $this JobController */
/* @var $model Job */

$this->breadcrumbs=array(
	'Jobs'=>array('index'),
	'Create',
);
?>

<div class="container">
	<h1 class="text-center">Create Job</h1>

	<div class="job-form">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
</div>