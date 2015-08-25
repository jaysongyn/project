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

                <div class="pull-left">Empresas ->  <a href="{{ route('empresa.create') }}" class="btn btn-sm btn-link">Cadastrar</a> </div>
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
                                    <th>Cnpj</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($empresas as $empresa)
                                    <tr>

                                        <td>{{  $empresa->id }}</td>
                                        <td>{{  $empresa->name }}</td>
                                        <td>{{  $empresa->cnpj }}</td>

                                        <td>
                                            <a href="{{  route('empresa.edit',['id'=>$empresa->id]) }}"  alt="Editar" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </a>
                                            <a href="{{  route('empresa.destroy',['id'=>$empresa->id]) }}" alt="Excluir" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </a>

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

