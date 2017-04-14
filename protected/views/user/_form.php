<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<!-- Form -->
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'htmlOptions'=>array(
		'class'=>'form-horizontal',
	),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="text-center">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'username',array('class'=>'control-label col-sm-3')); ?>
		<div class="col-sm-7">
			<?php echo $form->textField($model,'username'); ?>
		</div>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password',array('class'=>'control-label col-sm-3')); ?>
		<div class="col-sm-7">
			<?php echo $form->passwordField($model,'password',array()); ?>
		</div>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fname',array('class'=>'control-label col-sm-3')); ?>
		<div class="col-sm-7">
			<?php echo $form->textField($model,'fname',array()); ?>
		</div>
		<?php echo $form->error($model,'fname'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'lname',array('class'=>'control-label col-sm-3')); ?>
		<div class="col-sm-7">
			<?php echo $form->textField($model,'lname',array()); ?>
		</div>
		<?php echo $form->error($model,'lname'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email',array('class'=>'control-label col-sm-3')); ?>
		<div class="col-sm-7">
			<?php echo $form->textField($model,'email',array()); ?>
		</div>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'address',array('class'=>'control-label col-sm-3')); ?>
		<div class="col-sm-7">
			<?php echo $form->textField($model,'address',array()); ?>
		</div>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'phone',array('class'=>'control-label col-sm-3')); ?>
		<div class="col-sm-7">
			<?php echo $form->textField($model,'phone',array('class'=>'phone-input')); ?>
		</div>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'sin',array('class'=>'control-label col-sm-3')); ?>
		<div class="col-sm-7">
			<?php echo $form->textField($model,'sin',array('class'=>'sin-input')); ?>
			<?php echo $form->error($model,'sin'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'dob',array('class'=>'control-label col-sm-3')); ?>
		<div class="col-sm-7">
			<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
				$this->widget('CJuiDateTimePicker',array(
					'model'=>$model, //Model object
					'attribute'=>'dob', //attribute name
					'language'=>'en',
					'mode'=>'date', //use "time","date" or "datetime" (default)
					'options'=>array('dateFormat'=>'yy-mm-dd', 'changeYear'=>'true', 'yearRange'=>'1900:date("Y")') // jquery plugin options
				));
			?>
		</div>
		<?php echo $form->error($model,'dob'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'salary',array('class'=>'control-label col-sm-3')); ?>
		<div class="col-sm-7">
			<?php echo $form->telField($model,'salary',array('class'=>'salary-input')); ?>
			<?php echo $form->error($model,'salary'); ?>
		</div>
	</div>

	<br>
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-7">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success')); ?>
			<?php echo CHtml::resetButton('Clear', array('class'=>'btn btn-default')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>


<!-- End Form -->