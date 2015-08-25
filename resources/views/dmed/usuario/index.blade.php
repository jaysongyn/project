@extends('dmed.dmed')

@include('dmed.partial.top')

@section('content')
        <!-- Table -->
<div class="row">
    <div class="col-md-10">

        <div class="widget">
            @if(isset($message))
                <ul class='alert'>
                    <li>{{ $message['messaage'] }}</li>
                </ul>
            @endif
            <div class="widget-head">

                <div class="pull-left">Usuários ->  <a href="{{ route('usuario.create') }}" class="btn btn-sm btn-link">Cadastrar</a> </div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget-content">
                <div class="padd">
                    <!-- Table Page -->
                    <div class="page-tables">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table cellpadding="0" cellspacing="0" border="0" id="data-table-1" width="100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Empresa</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($usuarios as $usuario)
                                    <tr>
                                        <td>{{  $usuario->id }}</td>
                                        <td> <a href="{{  route('usuario.empresa.create',['id'=>$usuario->id]) }}"> {{$usuario->name }} </a> </td>
                                        <td>{{  $usuario->email }}</td>

                                        <td>
                                            <p>reponsável por {{ count($usuario->empresas) }} empresa(s)</p>
                                        </td>
                                        <td>
                                            <a href="{{  route('usuario.edit',['id'=>$usuario->id]) }}"  alt="Editar" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </a>
                                            <a href="{{  route('usuario.destroy',['id'=>$usuario->id]) }}" alt="Excluir" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-foot">
            </div>
        </div>
    </div>

</div>
</div>
@stop

