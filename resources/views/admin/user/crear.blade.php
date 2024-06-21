<h1>Nuevo Usuario</h1>
<form action="/usuario" method="post">
    @csrf
    <label for="">Ingrese Nombre</label>
    <input type="text" name="name">
    <br>
    <label for="">Ingrese correo</label>
    <input type="email" name="email">
    <br>
    <label for="">Ingrese Contraseña</label>
    <input type="password" name="password">
    <br>
    <input type="submit" value="Guardar Usuario">
</form>
