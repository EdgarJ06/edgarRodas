<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $clientePotencial->nombre }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $clientePotencial->email }}</p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $clientePotencial->telefono }}</p>
</div>

<!-- Negociacion Field -->
<div class="col-sm-12">
    {!! Form::label('negociacion', 'Negociacion:') !!}
    <p>{{ $clientePotencial->negociacion }}</p>
</div>

