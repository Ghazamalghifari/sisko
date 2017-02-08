<?php $__env->startSection('content'); ?>
	<div class="container"  style="margin-top:5%;">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Tambah Fasilitas Uks</h3>
   					 <div class="card-block">
        

						<?php echo Form::open(['url' => route('fasilitass.store'), 'method' => 'post', 'class' => 'form-horizontal']); ?>

						<?php echo $__env->make('fasilitass._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php echo Form::close(); ?>

					</div>

				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>