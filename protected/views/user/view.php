<?php
/* @var $this UserController */
/* @var $model User */
?>

<div class="container">
	
	<h1 class="text-center">Good day, <?php echo $model->fname; ?>!</h1>

	<br>
	<div class="user-table">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'username',
				array(
					'label'=>'Full Name',
					'value'=>$model->fname.' '.$model->lname,
				),
				array(
					'label'=>'Email',
					'type'=>'email',
					'value'=>$model->email,
				),
				'address',
				'phone',
				'sin',
				array(
					'label'=>'Birthday',
					'type'=>'date',
					'value'=>$model->dob,
				),
				array(
					'label'=>'Wage per hour',
					'type'=>'number',
					'value'=>$model->salary,
				),
			),
			'htmlOptions'=>array(
				'class'=>'table table-hover'
			),
		)); ?>
	</div>
	<br><br>
	<a id="update-button" class="btn btn-success center-block" href="<?php echo Yii::app()->request->baseUrl.'/index.php/user/update/'.Yii::app()->user->id?>" >Update Information</a>

</div>