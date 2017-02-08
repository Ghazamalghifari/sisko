<?php echo Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message]); ?>

<?php echo Form::submit('Kembailkan',['class'=>'btn btn-sm btn-danger']); ?>

<?php echo Form::close(); ?>