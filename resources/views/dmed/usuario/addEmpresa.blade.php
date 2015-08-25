@extends('dmed.dmed')
@include('dmed.partial.top')
@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="widget wgreen">
                <div class="widget-head">
                    <div class="pull-left">Usuário - {{ $usuario->name}}</div>
                    <div class="widget-icons pull-right">
                        <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                        <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                    <div class="padd">
                        <br/>
                        <!-- Form starts.  -->
                        <div class="form-horizontal">
                            {!! Form::open(['route'=>'usuario.empresa.store','role' => 'form' ]) !!}

                            <div class="form-group">
                                {!! Form::label('empresa', 'Empresa:', ['class' => 'col-lg-2 control-label']) !!}

                                <div class="col-lg-5">
                                    {!! Form::hidden('user_id',$usuario->id) !!}
                                    {!! Form::select('empresa_id', $usuario->cliente->empresas->lists('name','id'), "Selecione", ['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class='form-group'>
                                <div class="col-lg-offset-2 col-lg-6">
                                    <a href="{{ route('usuario.index') }}" class="btn btn-default">Voltar</a>
                                    {!! Form::submit('Atribuir Empresa', ['Class'=>'btn btn-primary']) !!}

                                </div>
                            </div>
                            {!! Form::close()!!}
                            <div>
                            </div>
                        </div>
                        <div class="widget-foot">
                            <!-- Footer goes here -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget">
                <div class="widget-head">
                    <div class="pull-left">{{ $usuario->name}} é reponsável por {{ count($usuario->empresas) }} empresa(s)</div>
                    <div class="widget-icons pull-right">
                        <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                        <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>CNPJ</th>
                                <th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($usuario->empresas as $empresa)
                                <tr>
                                    <td>{{  $empresa->id }}</td>
                                    <td> <a href="{{  route('usuario.empresa.create',['id'=>$empresa->id]) }}"> {{$empresa->name }} </a> </td>
                                    <td>{{  $empresa->cnpj }}</td>
                                   <td> <a href="{{  route('usuario.empresa.destroy',['userId'=>$usuario->id, 'empresaId' => $empresa->id] ) }}" alt="Excluir" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </a></td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="widget-foot">
                        <ul class="pagination pagination-sm pull-right">
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

@stop