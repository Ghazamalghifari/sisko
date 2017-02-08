{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message]) !!}
<a href="{{ $show_url }}" class="btn btn-sm btn-success">Data Siswa</a> 
{!! Form::close() !!}