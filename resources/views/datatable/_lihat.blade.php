{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message]) !!}
<a href="{{ $edit_url }}" class="btn btn-sm btn-warning">Edit</a> |
<a href="{{ $lihat_url }}" class="btn btn-sm btn-success">Data Siswa</a> |
{!! Form::submit('Hapus',['class'=>'btn btn-sm btn-danger']) !!}
{!! Form::close() !!}