<?php $__env->startSection('content'); ?>
	<div class="container" style="padding-top: 5%;">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Data Karyawan</h3>
   					 <div class="card-block">
					<div class="panel-body">
					
						<?php echo $__env->make('karyawans._see', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>