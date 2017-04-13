<?php
/* @var $this UserController */
/* @var $model User */

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1 class="text-center">Update <?php echo $model->fname; ?>'s information</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>