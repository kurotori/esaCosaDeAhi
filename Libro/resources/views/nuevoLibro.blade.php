<div>
    <h1>Nuevo Libro</h1>
    <form action="/api/libros/nuevo" method="post">
        @csrf
    <label for="isbn">ISBN:</label>
    <input type="text" id="isbn" name="isbn">
    <br>
    <label for="titulo">Titulo:</label>
    <input type="text" id="titulo" name="titulo">
    <br>
    <label for="autor">Autor:</label>
    <input type="text" id="autor" name="autor">
    <br>
    <label for="genero">Género</label>
    <input type="text" id="genero" name="genero">
    <br>
    <button type="submit">Crear Libro</button>
    </form>
</div>
