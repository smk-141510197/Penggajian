<?php $page = 'Update Golongan' ?>
<?php $root = 'golongan' ?>
@extends('layouts.'.config('app.layout'))

@section('footer')
<a href="{{url($root)}}">Golongan</a> > <a href="{{url($root,$data->id)}}">{{$data->nama_golongan}}</a>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$page}}</div>

                <div class="panel-body">
                    {!! Form::model($data,(['method'=>'PATCH','route'=>['golongan.update',$data->id]])) !!}
        			{!! Form::hidden('kode_golongan',null,['class'=>'form-control']) !!}
                    {{ csrf_field() }}
                    <table class="table">
                        <tr>
                            <td></td>
                            <td>
                            <div class="form-group{{ $errors->has('kode_golongan') ? ' has-error' : '' }}">
                			</div>
                        	@if ($errors->has('kode_golongan'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('kode_golongan') }}</strong>
	                            </span>
                        	@endif
                        </td>
                		</tr>
                		<tr>
                			<td>{!! Form::label('Nama') !!}</td>
                			<td>
                			<div class="form-group{{ $errors->has('nama_golongan') ? ' has-error' : '' }}">
                			{!! Form::text('nama_golongan',null,['class'=>'form-control']) !!}
                			</div>
                        	@if ($errors->has('nama_golongan'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('nama_golongan') }}</strong>
	                            </span>
                        	@endif
                        	</td>
                		</tr>
                		<tr>
                			<td>{!! Form::label('Tunjangan Uang') !!}</td>
                			<td>
                			<div class="form-group{{ $errors->has('tunjangan_uang') ? ' has-error' : '' }}">
                			<div class="input-group">
								<span class="input-group-addon">Rp.</span>
								{!! Form::number('tunjangan_uang',null,['class'=>'form-control','id'=>'appendprepend']) !!}
								<span class="input-group-addon">.00</span>
							</div>
                			</div>
                        	@if ($errors->has('tunjangan_uang'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('tunjangan_uang') }}</strong>
	                            </span>
                        	@endif
							</td>
                		</tr>
                		<tr>
                			<td colspan="2" align="right">{!! Form::submit('Update',['class'=>'btn btn-warning']) !!}</td>
                		</tr>
                	</table>
                	{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
