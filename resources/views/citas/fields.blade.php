<!-- Idpaciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpaciente', 'Idpaciente:') !!}
    {!! Form::number('idpaciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Cita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_cita', 'Fecha Cita:') !!}
    {!! Form::text('fecha_cita', null, ['class' => 'form-control','id'=>'fecha_cita']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_cita').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Iddoctor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iddoctor', 'Iddoctor:') !!}
    {!! Form::text('iddoctor', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>