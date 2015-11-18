@extends('layouts.formInsert')

@section('content')
@include('alerts.request')

{!!Form::open(['route'=>'cliente.store', 'method'=>'POST','files' => true])!!}

@include('cliente.forms.cliente')


<div class="row">

    <div class="col-xs-4">

        {!!Form::submit('Regista',['class'=>'btn btn-primary btn-block btn-flat'])!!}
        
    </div><!-- /.col -->

</div>

{!!Form::close()!!}
@endsection

@section('scripts')
 {!!Html::script('js/dropdown.js')!!}
@endsection
