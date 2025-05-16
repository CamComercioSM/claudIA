<!-- Modal -->
<div id="feedbackModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
        <h2 class="text-xl font-semibold mb-4">Formulario de Retroalimentación</h2>
        <form method="POST" action="procesar_feedback.php" onsubmit="return closeModal()">
            <label class="block mb-2">¿Tu experiencia fue:</label>
            <div class="flex space-x-4 mb-4">
                <label class="flex items-center">
                    <input type="radio" name="tipo" value="positiva" required class="mr-2"> Positiva
                </label>
                <label class="flex items-center">
                    <input type="radio" name="tipo" value="negativa" required class="mr-2"> Negativa
                </label>
                <label class="flex items-center">
                    <input type="radio" name="tipo" value="neutral" required class="mr-2"> Neutra
                </label>
            </div>
            <textarea name="comentario" required placeholder="Escribe tu comentario aquí..." class="w-full p-2 border border-gray-300 rounded mb-4"></textarea>
            <div class="flex justify-end space-x-2">
                <button type="button" onclick="document.getElementById('feedbackModal').classList.add('hidden')" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Cancelar</button>
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Enviar</button>
            </div>
        </form>
    </div>
</div>
<script>
    function closeModal() {
        document.getElementById('feedbackModal').classList.add('hidden');
        return true;
    }
</script>