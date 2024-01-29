<?php


    // Connexion à la base de données
    $conn = mysqli_connect('localhost', 'root', 'rayen', 'student');

    // Vérification de la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Préparation de la requête d'insertion (use prepared statement)
    $sql = "INSERT INTO Register (name, email, pswd) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $_POST['name'], $_POST['email'], $_POST['pswd']);
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
    header("Location: login1.php"); // Redirection vers exempl.html
    exit(); // Assurez-vous de terminer l'exécution du script après la redirection
    // Fermeture de la connexion
    mysqli_close($conn);

?>