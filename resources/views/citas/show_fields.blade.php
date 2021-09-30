<!-- Idpaciente Field -->
<div class="col-sm-12">
    {!! Form::label('idpaciente', 'Idpaciente:') !!}
    <p>{{ $cita->idpaciente }}</p>
</div>

<!-- Fecha Cita Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_cita', 'Fecha Cita:') !!}
    <p>{{ $cita->fecha_cita }}</p>
</div>

<!-- Iddoctor Field -->
<div class="col-sm-12">
    {!! Form::label('iddoctor', 'Iddoctor:') !!}
    <p>{{ $cita->iddoctor }}</p>
</div>

