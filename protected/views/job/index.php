<?php
/* @var $this JobController */
/* @var $p['Jobs'] */

$this->breadcrumbs=array(
	'Jobs',
);
?>
<div class="container">

	<h1 class="text-center">Jobs</h1>

	<br>
	<div class="job-table">
		<?php 
		if (empty($jobs))
			echo '<h3 class="text-center">No records found</h3>';
		else { ?>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Date</th>
					<th>Start</th>
					<th>End</th>
					<th>Jobsite</th>
					<th>Total Hours</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($jobs as $m) { ?>
				<tr>
					<td><?php echo date('D M-j', strtotime($m->date)) ?></td>
					<td><?php echo date('h:i a', strtotime($m->start)) ?></td>
					<td><?php echo date('h:i a', strtotime($m->end)) ?></td>
					<td><?php echo $m->jobsite->name ?></td>
					<td><?php echo $m->totalHours ?></td>
					<td><a href="<?php echo Yii::app()->request->baseUrl.'/index.php/job/update/'.$m->id ?>">Update</a></td>
					<td><a href="<?php echo Yii::app()->request->baseUrl.'/index.php/job/view/'.$m->id ?>">View</a></td>
					<td><a href="<?php echo Yii::app()->request->baseUrl.'/index.php/job/delete/'.$m->id ?>">Delete</a></td>
				</tr>
				<?php } ?>
				<tr>
					<td colspan="4">Total</td>
					<td><?php  echo $this->totalHoursForPeriod ?></td>
					<td colspan="3"></td>
				</tr>
			</tbody>
		</table>
		<?php } ?>
		
		<br><br>
		<a id="create-button" class="btn btn-success center-block" href="<?php echo Yii::app()->request->baseUrl.'/index.php/job/create'?>">Add New Job</a>
		
	</div>

</div>
