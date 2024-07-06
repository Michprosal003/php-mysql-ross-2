<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Inscripción de Estudiantes</title>
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <style>
 body {
 background-image: url(''); /* Puedes definir tu propia imagen de
fondo aquí */
 background-color: #f8f9fa; /* Color de fondo alternativo si la
imagen no se carga */
 background-size: cover; /* Ajusta la imagen para cubrir todo el
fondo */
 background-repeat: no-repeat; /* Evita que la imagen se repita
*/
 background-attachment: fixed; /* Fija la imagen de fondo para
que no se desplace con el contenido */
 height: 100vh; /* Ajusta la altura al 100% del viewport */
 }
 </style>
</head>
<body>
 <div class="container-fluid h-100">
 <div class="row h-100 justify-content-center align-items-center">
 <!-- Columna izquierda con formulario de inscripción -->
 <div class="col-md-6">
 <div class="card">
 <div class="card-header">
 <h4 class="text-center">Inscripción de
estudiantes</h4>
 </div>
 <div class="card-body">
 <form action="guardar_inscripcion.php"
method="POST">
 <div class="form-group">
 <label for="nombre">Nombre:</label>
<input type="text" class="form-control"
id="nombre" name="nombre" required>
 </div>
<div class="form-group">
 <label for="apellido">Apellido:</label>
<input type="text" class="form-control"
id="apellido" name="apellido" required>
 </div>
<div class="form-group">
 <label for="correo">Correo
Electrónico:</label>
 <input type="email" class="form-control"
id="correo" name="correo" required>
 </div>
<div class="form-group">
 <label for="telefono">Teléfono:</label>
<input type="tel" class="form-control"
id="telefono" name="telefono" required>
 </div>
<div class="form-group">
 <label for="nivel">Nivel de
Conocimiento:</label>
 <select class="form-control" id="nivel"
name="nivel" required>
 <option value="">Seleccione el nivel de
conocimiento</option>
 <option
value="Principiante">Principiante</option>
 <option
value="Intermedio">Intermedio</option>
 <option
value="Avanzado">Avanzado</option>
 </select>
 </div>
<div class="form-group text-center">
 <!-- Botón de envío -->
 <button type="submit" name="submit"
class="btn btn-primary btn-lg btn-block">Inscribirse</button>
 </div>
<div class="form-group text-center">
 <!-- Botón para regresar -->
 <a href="buscar-pag.php" class="btn btnsecondary btn-lg btn-block">Consulta para ver si tu nombre ya aparece en la
lista</a>
 </div>
 </form>
 </div>
 </div>
 </div>
 <!-- Columna derecha con tarjeta de imagen -->
 <div class="col-md-6 d-flex align-items-center">
 <div class="card">
 <img src="https://w0.peakpx.com/wallpaper/6/619/HD-wallpaper-php-developer.jpg" class="card-img-top" alt="Imagen de PHP">
 <div class="card-body">
 <h4 class="card-title text-center">Bienvenido al
curso de PHP</h4>
 <p class="card-text">Aprende PHP y desarrolla
aplicaciones web poderosas. La clave es ofrecer contenido de alta calidad y
asegurarte de que los estudiantes obtengan habilidades prácticas y
aplicables que puedan demostrar en el mundo real.</p>
 </div>
 </div>
 </div>
 </div>
 </div>
</body>
</html>
