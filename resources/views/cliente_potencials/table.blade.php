<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="cliente-potencials-table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Negociacion</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clientePotencials as $clientePotencial)
                <tr>
                    <td>{{ $clientePotencial->nombre }}</td>
                    <td>{{ $clientePotencial->email }}</td>
                    <td>{{ $clientePotencial->telefono }}</td>
                    <td>{{ $clientePotencial->negociacion }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['clientePotencials.destroy', $clientePotencial->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('clientePotencials.show', [$clientePotencial->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('clientePotencials.edit', [$clientePotencial->id]) }}"
                               class='btn btn-default btn-xs'>
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

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $clientePotencials])
        </div>
    </div>
</div>
