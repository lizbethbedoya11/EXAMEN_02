<!-- Apellido Field -->
<div class="col-sm-12">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $doctor->apellido }}</p>
</div>

<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $doctor->nombre }}</p>
</div>

<!-- Dni Field -->
<div class="col-sm-12">
    {!! Form::label('dni', 'Dni:') !!}
    <p>{{ $doctor->dni }}</p>
</div>

<!-- Especialidad Field -->
<div class="col-sm-12">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    <p>{{ $doctor->especialidad }}</p>
</div>

