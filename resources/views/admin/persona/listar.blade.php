<h1>Lista de Persona</h1>


<a href="/persona/crear">Nueva Persona</a>

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>NOMBRES</th>
        <th>APELLIDOS</th>
        <th>FECHA NACIMIENTO</th>
        <th>CI</th>
        <th>ACCIONES</th>
    </tr>
    </thead>
    <tbody>
    @foreach($personas as $per)
        <tr>
            <td>{{ $per->id }}</td>
            <td>{{ $per->nombres }}</td>
            <td>{{ $per->apellidos }}</td>
            <td>{{ $per->fecha_nac }}</td>
            <td>{{ $per->ci }}</td>
            <td>
                <a href="/persona/{{ $per->id }}">editar</a>

                <form action="/persona/{{ $per->id }}" method="post">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="eliminar">
                </form>

            </td>
        </tr>
    @endforeach

    </tbody>

</table>
