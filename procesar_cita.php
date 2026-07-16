<?php
session_start();
header('Content-Type: application/json');

// Configuración de la base de datos
$host = 'localhost';
$dbname = 'andreakaterji';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validar datos
        $nombre = trim($_POST['nombre'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $fecha = trim($_POST['fecha'] ?? '');
        $hora = trim($_POST['hora'] ?? '');
        $mensaje = trim($_POST['mensaje'] ?? '');
        
        // Validaciones básicas
        if (empty($nombre) || empty($email) || empty($telefono) || empty($fecha) || empty($hora)) {
            echo json_encode([
                'success' => false,
                'message' => 'Por favor completa todos los campos obligatorios.'
            ]);
            exit;
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode([
                'success' => false,
                'message' => 'Por favor ingresa un email válido.'
            ]);
            exit;
        }
        
        // Combinar fecha y hora
        $fecha_hora = $fecha . ' ' . $hora;
        
        // Insertar en la base de datos
        $sql = "INSERT INTO appointments (name, email, phone, preferred_datetime, message, created_at, source) 
                VALUES (:name, :email, :phone, :preferred_datetime, :message, NOW(), 'theflowmethod')";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $nombre,
            ':email' => $email,
            ':phone' => $telefono,
            ':preferred_datetime' => $fecha_hora,
            ':message' => $mensaje
        ]);
        
        echo json_encode([
            'success' => true,
            'message' => '¡Tu cita ha sido agendada exitosamente! Te contactaremos pronto para confirmar.'
        ]);
        
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Método no permitido.'
        ]);
    }
    
} catch (PDOException $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Error al procesar tu solicitud. Por favor intenta más tarde.'
    ]);
    error_log("Error en procesar_cita.php: " . $e->getMessage());
}
