<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
?>

<div class="container">
	
	<h1 class="text-center">Login</h1>
	<br>
	<p class="text-center">Please fill out the following form with your login credentials:</p>

	<div class="user-form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'htmlOptions'=>array(
			'class'=>'form-horizontal',
		),
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

		<p class="text-center">Fields with <span class="required">*</span> are required.</p>
		<br>
		<div class="form-group">
			<?php echo $form->labelEx($model,'username',array('class'=>'control-label col-sm-4')); ?>
			<div class="col-sm-6">
				<?php echo $form->textField($model,'username'); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'password',array('class'=>'control-label col-sm-4')); ?>
			<div class="col-sm-6">
				<?php echo $form->passwordField($model,'password'); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>
		</div>

		<div class="form-group">
			<?php echo $form->label($model,'rememberMe',array('class'=>'control-label col-sm-4')); ?>
			<div class="col-sm-6">
				<?php echo $form->checkBox($model,'rememberMe'); ?>
				<?php echo $form->error($model,'rememberMe'); ?>
			</div>
		</div>
		<br>
		<div class="form-group">
			<div class="col-sm-offset-4 col-sm-6">
				<?php echo CHtml::submitButton('Login',array('class'=>'btn btn-success')); ?>
			</div>
		</div>

	<?php $this->endWidget(); ?>
	</div><!-- form -->
</div>