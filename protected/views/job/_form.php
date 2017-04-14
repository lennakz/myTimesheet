<?php
/* @var $this JobController */
/* @var $model Job */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-form',
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
		<?php echo $form->labelEx($model,'date',array('class'=>'control-label col-sm-3')); ?>
		<div class="col-sm-7">
			<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
				$this->widget('CJuiDateTimePicker',array(
					'model'=>$model, //Model object
					'attribute'=>'date', //attribute name
					'language'=>'en',
					'mode'=>'date', //use "time","date" or "datetime" (default)
					'options'=>array("dateFormat"=>'yy-mm-dd') // jquery plugin options
				));
			?>
			<?php echo $form->error($model,'date'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'start',array('class'=>'control-label col-sm-3')); ?>
		<div class="col-sm-3">
			<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
				$this->widget('CJuiDateTimePicker',array(
					'model'=>$model, //Model object
					'attribute'=>'start', //attribute name
					'mode'=>'time', //use "time","date" or "datetime" (default)
					//'options'=>array() // jquery plugin options
				));
			?>
			<?php echo $form->error($model,'start'); ?>
		</div>
		<?php echo $form->labelEx($model,'end',array('class'=>'control-label col-sm-1')); ?>
		<div class="col-sm-3">
			<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
				$this->widget('CJuiDateTimePicker',array(
					'model'=>$model, //Model object
					'attribute'=>'end', //attribute name
					'mode'=>'time', //use "time","date" or "datetime" (default)
					//'options'=>array() // jquery plugin options
				));
			?>
			<?php echo $form->error($model,'end'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jobsite_id',array('class'=>'control-label col-sm-3')); ?>
		<div class="col-sm-7">
			<?php echo $form->dropDownList($model, 'jobsite_id', CHtml::listData(Jobsite::model()->findAll(array('order' => 'name')), 'id', 'name'));?>
			<?php echo $form->error($model,'jobsite_id'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'description',array('class'=>'control-label col-sm-3')); ?>
		<div class="col-sm-7">
			<?php echo $form->textArea($model,'description'); ?>
			<?php echo $form->error($model,'description'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-7">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

