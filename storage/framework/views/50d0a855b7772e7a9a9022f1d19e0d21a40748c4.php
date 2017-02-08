<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Tambah Abudemen</h3>
   					 <div class="card-block">

					<div class="panel-body">
						<?php echo Form::open(['url' => route('abudemens.store'), 'method' => 'post', 'class' => 'form-horizontal']); ?>

						<?php echo $__env->make('abudemens._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php echo Form::close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>