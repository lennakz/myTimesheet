<?php
/* @var $this UserController */
/* @var $model User */
?>

<div class="container">

	<h1 class="text-center">Update <?php echo $model->fname; ?>'s information</h1>
	
	<div class="user-form">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>

</div>