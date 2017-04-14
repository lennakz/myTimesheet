<?php
/* @var $this JobController */
/* @var $model Job */

$this->breadcrumbs=array(
	'Jobs'=>array('index'),
	$model->id,
);
?>

<div class="container">
	
	<h1 class="text-center">View Job for <?php echo $model->date; ?></h1>
	
	<br>
	<div class="job-table">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
				array(
					'label'=>'User',
					'value'=>$model->user->fname . ' ' . $model->user->lname,
				),
				'date',
				'start',
				'end',
				array(
					'label'=>'Jobsite',
					'value'=>$model->jobsite->name,
				),
				'description',
			),
			'htmlOptions'=>array(
				'class'=>'table table-hover'
			),
		)); ?>
	</div>
	
	<br><br>
	<a id="update-button" class="btn btn-success center-block" href="<?php echo Yii::app()->request->baseUrl.'/index.php/job/update/'.Yii::app()->user->id?>" >Update Information</a>

</div>