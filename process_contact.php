<?php
// Lidhje me mysql
include 'connect.php';  // Lidhja me mysql

// Dergimi i formularit
if (isset($_POST['submit'])) {
    // Merr të dhënat nga formulari
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Kontrollimi i fushave te mbushura
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Krijimi i queryt
        $query = "INSERT INTO messages (name, email, message) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($query);
        
        // Ekzekutimi i queryt
        if ($stmt->execute([$name, $email, $message])) {
            echo "Mesazhi u dërgua me rregull!";
        } else {
            echo "Ka nje problem ne mesazh.";
        }
    } else {
        echo "Të gjitha kerkesat duhen te plotsohen.";
    }
}
?>
