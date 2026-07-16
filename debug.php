<!DOCTYPE html>
<html>
<head>
    <title>DEBUG - Test de Modal</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .btn { background: #481F71; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin: 10px; }
        .modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 9999; }
        .modal-content { background: white; padding: 20px; margin: 50px auto; max-width: 600px; border-radius: 10px; }
        .close { float: right; cursor: pointer; font-size: 24px; }
    </style>
</head>
<body>
    <h1>DEBUG - Test de Modal</h1>
    <p>Si ves esto, el PHP funciona. Ahora probemos el modal:</p>
    
    <button class="btn" onclick="testModal()">Probar Modal</button>
    <button class="btn" onclick="testAlert()">Probar Alert</button>
    <button class="btn" onclick="testConsole()">Probar Console</button>
    
    <div id="testModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="cerrarModal()">&times;</span>
            <h2>Modal Funciona</h2>
            <p>Si ves este modal, el JavaScript está funcionando.</p>
        </div>
    </div>
    
    <script>
        console.log('DEBUG: Script cargado');
        
        function testModal() {
            console.log('DEBUG: testModal() llamado');
            document.getElementById('testModal').style.display = 'block';
        }
        
        function cerrarModal() {
            console.log('DEBUG: cerrarModal() llamado');
            document.getElementById('testModal').style.display = 'none';
        }
        
        function testAlert() {
            console.log('DEBUG: testAlert() llamado');
            alert('JavaScript funciona correctamente');
        }
        
        function testConsole() {
            console.log('DEBUG: testConsole() llamado');
            console.log('DEBUG: Console.log funciona');
            document.body.innerHTML += '<p>Console.log funciona - revisa la consola</p>';
        }
        
        // Test de eventos
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('btn')) {
                console.log('DEBUG: Click detectado en botón:', e.target.textContent);
            }
        });
        
        console.log('DEBUG: Todos los eventos configurados');
    </script>
</body>
</html>
