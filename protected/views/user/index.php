<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1>User</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
