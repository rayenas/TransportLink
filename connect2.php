<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    // SMTP settings (example uses Gmail)
    $mail->SMTPDebug = 0; // Set to 2 for debugging
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'rayen.askri142@gmail.com'; // Your Gmail email address
    $mail->Password   = '******';        // Your Gmail password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Sender information
    $mail->setFrom('rayen.askri142@gmail.com', 'rayen');
    $mail->addReplyTo('rayen.askri142@gmail.com', 'rayen');

    // Recipient
    
    $to_email = $_POST['email'];
    $mail->addAddress($to_email);

    // Email content
    $mail->isHTML(false); // Set to true if you want to send HTML email
    $sentence = 'Hello, <a href="https://example.com">click here</a> to visit our website.';

    $mail->Subject = 'Dear Customer';

    $mail->Body ="Congratulations! Your payment has been made successfully.";

    // Connexion à la base de données
    $conn = mysqli_connect('localhost', 'root', 'rayen', 'student');

    // Vérification de la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Préparation de la requête d'insertion (use prepared statement)
    $sql = "INSERT INTO t3 (firstname , lastname , phone , email , aller , retour , photo) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters including 'photo' as a binary parameter
        mysqli_stmt_bind_param($stmt, "ssssssb", $_POST['firstname'], $_POST['lastname'], $_POST['phone'], $_POST['email'], $_POST['aller'], $_POST['retour'], $photo);

        // Read the uploaded file and bind it to 'photo'
        $photo = file_get_contents($_FILES['photo']['tmp_name']);

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

    // Fetch phone numbers from the t2 table
    $phoneNumberToCheck = $_POST['phone'];
    $columnToCheck = "Phone";
    $found = false;

    // Execute the SQL query to retrieve phone numbers from t2
    $result = mysqli_query($conn, "SELECT Phone FROM t2");

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row[$columnToCheck] === $phoneNumberToCheck) {
                $found = true;
                break;
            }
        }

        // Free result set
        mysqli_free_result($result);
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }

    if ($found) {
        $mail->send();
        // Afficher une alerte si le numéro de téléphone existe dans la base de données
        echo '<script type="text/javascript">';
        echo '    alert("Phone number exists in the database.");';
        echo '</script>';
    } else {
        // Afficher une autre alerte si le numéro de téléphone n'existe pas dans la base de données
        echo '<script type="text/javascript">';
        echo '    alert("Phone number does not exist in the database.");';
        echo '</script>';
    }

    mysqli_close($conn);

} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header("Location: exempl.html"); 
?>
