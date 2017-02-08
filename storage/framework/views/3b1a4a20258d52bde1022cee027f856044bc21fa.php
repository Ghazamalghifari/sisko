<?php echo Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message]); ?>

<a href="<?php echo e($show_url); ?>" class="btn btn-sm btn-success">Data Siswa</a> 
<?php echo Form::close(); ?>