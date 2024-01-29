<?php
if (isset($_POST['phone'])) {  // Vérifie si $_POST['phone'] est défini
    // Connexion à la base de données
    $conn = mysqli_connect('localhost', 'root', 'rayen', 'student');
    // Vérification de la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Préparation de la requête d'insertion (use prepared statement)
    $sql = "INSERT INTO t2 (phone) VALUES (?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $_POST['phone']);
        if (mysqli_stmt_execute($stmt)) {
            // Send the email
            
            echo 'Email has been sent and data has been recorded successfully.';
        } else {
            echo "Error inserting data: " . mysqli_stmt_error($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    // Fermeture de la connexion
    mysqli_close($conn);
} else {
    echo "Phone number is not set in the POST data.";
}
?>