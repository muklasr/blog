{!! Form::model($item,['route' => ['category.update', $item->id], 'method' => 'put']) !!}
 
{!! Form::label('name', 'Nama') !!}
 
 
{!! Form::text('name', null, ['class' => 'form-control ']) !!}
 
<button type="submit" class="btn btn-primary">Simpan</button>
 
 
{!! Form::close() !!}