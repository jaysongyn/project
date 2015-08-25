@extends('dmed.dmed')

@include('dmed.partial.top')

@section('content')
    <div class="row">

        <div class="col-md-10">


            <div class="widget wgreen">

                <div class="widget-head">
                    <div class="pull-left">Cadastro</div>
                    <div class="widget-icons pull-right">
                        <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                        <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                    <div class="padd">

                        <br />
                        <!-- Form starts.  -->
                        <div class="form-horizontal">
                            {!! Form::open(['route'=> ['empresa.update',$empresa->id ],'method' => 'put', 'role' => 'form' ]) !!}
                            {!! Form::hidden('cliente_id', $empresa->cliente_id) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Nome Empresa:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-5">
                                    {!! Form::text('name', $empresa->name, ['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('cnpj', 'CNPJ:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-5">
                                    {!! Form::text('cnpj', $empresa->cnpj, ['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class='form-group'>
                                <div class="col-lg-offset-2 col-lg-6">
                                    <a href="{{ route('empresa.index') }}" class="btn btn-default">Voltar</a>
                                    {!! Form::submit('Salvar', ['Class'=>'btn btn-primary']) !!}

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
@stop