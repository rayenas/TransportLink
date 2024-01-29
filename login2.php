
<?php
$conn = mysqli_connect('localhost', 'root', 'rayen', 'student');

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['pswd'];

    $query = "SELECT * FROM register WHERE email = '$email' AND pswd = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $response = array("success" => true);
        header("Location: exempl.html"); // Redirection vers exempl.html
    exit(); // Assurez-vous de terminer l'exécution du script après la redirection
    } else {
        $response = array("success" => false);
        header("Location: login1.php"); // Redirection vers exempl.html
    exit(); // Assurez-vous de terminer l'exécution du script après la redirection
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

mysqli_close($conn);
?>
