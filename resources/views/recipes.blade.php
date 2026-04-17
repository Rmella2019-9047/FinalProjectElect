<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Recetas Rápidas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-50 p-10">
<div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-md">
    <h1 class="text-2xl font-bold text-orange-600 mb-4">Nueva Receta 🍳</h1>

    <form id="recipeForm" class="space-y-4">
        @csrf
        <div>
            <label class="block">Nombre del plato:</label>
            <input type="text" id="title" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block">Ingredientes:</label>
            <textarea id="ingredients" class="w-full border p-2 rounded" required></textarea>
        </div>
        <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
            Añadir a la lista
        </button>
    </form>

    <hr class="my-6">

    <h2 class="text-xl font-semibold mb-3">Recetas del momento:</h2>
    <ul id="recipeList" class="list-disc pl-5 space-y-2"></ul>
</div>

<script>
    document.getElementById('recipeForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const title = document.getElementById('title').value;
        const ingredients = document.getElementById('ingredients').value;
        const list = document.getElementById('recipeList');

        const li = document.createElement('li');
        li.innerHTML = `<strong>${title}</strong>: ${ingredients}`;
        li.className = "p-2 bg-orange-100 rounded shadow-sm";
        list.appendChild(li);

        this.reset();
    });
</script>
</body>
</html>
