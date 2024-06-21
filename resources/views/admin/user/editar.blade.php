<h1>Editar Usuario</h1>
<form action="/usuario/{{$usuario->id}}" method="post">
    @csrf
    @method('PUT')
    <label for="">Ingrese Nombre</label>
    <input type="text" name="name" value="{{$usuario->name}}">
    <br>
    <label for="">Ingrese correo</label>
    <input type="email" name="email" value="{{$usuario->email}}">
    <br>
    <label for="">Ingrese Contraseña</label>
    <input type="password" name="password">
    <br>
    <input type="submit" value="Actualizar Usuario">
</form>
