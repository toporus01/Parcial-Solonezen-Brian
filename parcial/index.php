<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Brian Solonezen</title>
    <link rel="stylesheet" href="bs_estilos.css">
</head>
<body>
    <header class="bs_header">
        <img src="bs_imagenes/bs_logo.png" alt="Logo del Blog" class="imagen-blog" width="10%">
        <h1>Bienvenido a Mi Blog</h1>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="bs_sobre_mi.php">Sobre Mí</a></li>
                <li><a href="bs_entradas.php">Entradas</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="inicio">
            <h2>Inicio</h2>
            <p>Este es el inicio de mi blog donde comparto mis gustos, pensamientos y experiencias. Hablaremos de lo que me apasiona y de lo que me aburre.
                Mas abajo tendran una seccion para dejar un comentario de lo que le parece este blog. 
            </p>
        </section>

    

        <section id="comentarios">
    <h2>Deja un Comentario</h2>
    <form id="comentario-form" action="bs_guardar_comentarios.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" required></textarea>
        <button type="submit">Enviar Comentario</button>
    </form>
    <div id="comentarios-lista">
        <h3>Comentarios Recientes</h3>
        <ul id="lista-comentarios"></ul>
    </div>
</section>

    </main>

    <footer>
        <p>&copy; 2024 Brian Solonezen. Todos los derechos reservados.</p>
    </footer>

    <script src="bs_script.js"></script>
</body>
</html>
