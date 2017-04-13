<?php
/* @var $this JobController */
/* @var $model Job */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'start'); ?>
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
		
	<div class="row">
		<?php echo $form->labelEx($model,'end'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'jobsite_id'); ?>
		<?php echo $form->dropDownList($model, 'jobsite_id', CHtml::listData(Jobsite::model()->findAll(array('order' => 'name')), 'id', 'name'));?>
		<?php echo $form->error($model,'jobsite_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->