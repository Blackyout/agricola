@extends('admin.principal')

<?php $message=Session::get('message') ?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Declaracion  creada correctamente
</div>
@endif

@section('content')

<h1>Listado de declaraciones de soporte</h1>
<div class="title_right ">
    	<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search ">
      		<div class="input-group">
	      		{!!Form::open(['route'=>'dsc.index','method'=>'GET','class'=>'navbar-form navbar-left', 'role'=>'search'])!!}
	      			{!! Form::text ('buscar', null , ['class'=>'form-control', 'placeholder'=>'Buscar contrato']) !!}
	        		<span class="input-group-btn">
	          			<button class="btn btn-default" type="submit">Buscar</button>
	        		</span>
	        	{!!Form::close()!!}
      		</div>
    	</div>
 </div>
<table class="table">
  <thead>
    <th>Codigo</th>
    <th>Fecha</th>
    <th>N° Contrato</th>
    <th>Valor Contrato</th>
    <th>Opciones</th>
  </thead>
  @foreach($dsc as $ds)
  <tbody>
    <td>{{ $ds->id }}</td>
    <td>{{ $ds->fecha }}</td>
    <td>{{ $ds->Num_Cont }}</td>
    <td>{{ number_format($ds->val_contra)}}.oo</td>
    <td>
      {!!link_to_route('dsc.edit', $title = 'EDITAR', $parameters = $ds->id, $attributes = ['class'=>'btn btn-success'])!!}
      {!!link_to_route('dsc.show', $title = 'PDF', $parameters = $ds->id, $attributes = ['class'=>'btn btn-danger'])!!}
      
      

    </td>
  </tbody>
  @endforeach
</table>
{!!$dsc->render()!!}
@endsection