<div class="table-responsive">
    <table class="table" id="detalles-table">
        <thead>
            <tr>
                <th>Id cita</th>
        <th>Detalle cita</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detalles as $detalle)
            <tr>
                <td>{{ $detalle->idcita }}</td>
            <td>{{ $detalle->detallecita }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['detalles.destroy', $detalle->iddetalle], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detalles.show', [$detalle->iddetalle]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('detalles.edit', [$detalle->iddetalle]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
