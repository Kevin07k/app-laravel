{{--{{$usuarios}}--}}
<h1>Lista</h1>

<a href="/usuario/create">Nuevo Usuario</a>
<table border ="1">
    <thead>
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>CORREO</td>
        <td>CREADO EN</td>
        <td>ACCIONES</td>
    </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $us)

    <tr>
        <td>{{$us -> id}}</td>
        <td>{{$us->name}}</td>
        <td>{{$us->email}}</td>
        <td>{{$us->created_at}}</td>
        <td>
            <a href="/usuario/{{$us->id}}/edit">Editar</a>
            <form action="/usuario/{{$us->id}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Eliminar">
            </form>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
