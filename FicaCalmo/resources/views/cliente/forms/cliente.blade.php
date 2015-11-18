

<div class="form-group">

    <label class="col-sm-2 col-sm-2 control-label">Nome</label>

    <div class="col-sm-10">

        {!!Form::text('nome',null,['class'=>'form-control round-form', 'placeholder'=>'Nome'])!!}
        <br>
    </div>


    <label class="col-sm-2 col-sm-2 control-label">Apelido</label>

    <div class="col-sm-10">

        {!!Form::text('apelido',null,['class'=>'form-control round-form', 'placeholder'=>'Apelido'])!!}
        <br>
    </div>


    <label class="col-sm-2 col-sm-2 control-label">Telefone</label>

    <div class="col-sm-10">

        {!!Form::text('telefone',null,['class'=>'form-control round-form', 'placeholder'=>'Telefone'])!!}
        <br>
    </div>


    <label class="col-sm-2 col-sm-2 control-label">Email</label>

    <div class="col-sm-10">

        {!!Form::text('email',null,['class'=>'form-control round-form', 'placeholder'=>'Email'])!!}
        <br>
    </div>


    <label class="col-sm-2 col-sm-2 control-label">Nome</label>

    <div class="col-sm-10">

        {!!Form::text('nuit',null,['class'=>'form-control round-form', 'placeholder'=>'NUIT'])!!}
        <br>
    </div>


    <label class="col-sm-2 col-sm-2 control-label">Casa</label>

    <div class="col-sm-10">

        {!!Form::text('casa',null,['class'=>'form-control round-form', 'placeholder'=>'N&ordm; Casa'])!!}
        <br>
    </div>


    <label class="col-sm-2 col-sm-2 control-label">Quarteir&atilde;o</label>

    <div class="col-sm-10">

        {!!Form::text('quarteirao',null,['class'=>'form-control round-form', 'placeholder'=>'Quarteir&atilde;o'])!!}
        <br>
    </div>


    <label class="col-sm-2 col-sm-2 control-label">Distrito</label>

    <div class="col-sm-10">

        {!!Form::select('distrito_id',$distritos, null, ['class'=>'form-control round-form'])!!}
        <br> 
    </div>


    <label class="col-sm-2 col-sm-2 control-label">Bairro</label>

    <div class="col-sm-10">
        {!!Form::select('bairro_id',$bairros, null, ['class'=>'form-control round-form'])!!}

        <br><br>
    </div>

</div>

