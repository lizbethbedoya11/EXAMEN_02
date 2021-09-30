<!-- Idcita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcita', 'Idcita:') !!}
    {!! Form::number('idcita', null, ['class' => 'form-control']) !!}
</div>

<!-- Detallecita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('detallecita', 'Detallecita:') !!}
    {!! Form::text('detallecita', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>