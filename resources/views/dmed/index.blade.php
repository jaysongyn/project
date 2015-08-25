@extends('dmed.dmed')

@include('dmed.partial.top')

@section('content')
    <!-- Today status. jQuery Sparkline plugin used. -->
<div class="row">
    <div class="row">
        <div class="col-md-12">
            @include('dmed.partial.widget.status')
        </div>
        <!-- Today status ends -->

        <!-- Dashboard widget -->
        <div class="col-md-8">
            @include('dmed.partial.widget.dashboard')
        </div>
        <!-- Dashboard widget ends -->

        <!-- Status  widget -->
        <div class="col-md-4">
            @include('dmed.partial.widget.visitors')
        </div>
        <!-- Status widget ends -->
    </div>
        <!-- Dashboard Graph ends -->

    <!-- Chats, File upload and Recent Comments -->
    <div class="row">

        <!-- Chat widget starts-->
        <div class="col-md-4">
            @include('dmed.partial.widget.chat')
        </div>
        <!-- Chat widget ends -->

        <!-- file widget starts-->
        <div class="col-md-4">
            @include('dmed.partial.widget.file')
            @include('dmed.partial.widget.browser')
        </div>
        <!-- file widget ends -->

        <!-- comments widget starts-->
        <div class="col-md-4">
            @include('dmed.partial.widget.comments')
        </div>
        <!-- comments widget ends -->
    </div>


    <div class="row">
        <div class="col-md-6">
            <!-- Black Chart widget -->
            @include('dmed.partial.widget.black-chart')
        </div>
        <div class="col-md-6">
            <!-- Black Chart widget -->
            @include('dmed.partial.widget.quick-post')
        </div>
    </div>
</div>
@stop











