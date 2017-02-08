<?php echo Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message]); ?>

<a href="<?php echo e($edit_url); ?>" class="btn btn-sm btn-warning">Edit</a> |
<a href="<?php echo e($lihat_url); ?>" class="btn btn-sm btn-success">Data Siswa</a> |
<?php echo Form::submit('Hapus',['class'=>'btn btn-sm btn-danger']); ?>

<?php echo Form::close(); ?>