<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Complaints Page</title>
    <style>
      /* Reset some default browser styles */
body, h1, h2, p, label, button {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-image: url(assets/image/layered-waves-haikei.png);
    background-size: cover; /* or contain, auto, etc. */
  background-position: center center; /* or specify position values */
  background-repeat: no-repeat; /* or repeat-x, repeat-y, repeat */
  background-color: #f2f2f2; /* fallback color if image isn't fully visible */
}



header {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1em 0;
}

main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.complaint-form {
    background-color: #fff;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-bottom: 15px;
}

form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

form input,
form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

form button {
    background-color: #333;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

footer {
    text-align: center;
    padding: 10px;
    
    color: white;
}

    </style>
</head>
<body>
 
    <header>
        <h1>Complaints Page</h1>
    </header>
    <main>
        <section class="complaint-form">
            <h2>Submit a Complaint</h2>
            <form  action="base_form.php" method="post">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="complaint">Complaint:</label>
                <textarea id="complaint" name="complaint" rows="4" required></textarea>
                
                <button type="submit">Submit Complaint</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Complaints Page</p>
    </footer>
    <script>
document.getElementById('complaintForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche la soumission normale du formulaire
    
    // Traitez le formulaire ici si nécessaire
    
    // Afficher une alerte
    alert("Complaint submitted successfully.");

    // Redirection vers example.html
    window.location.href = 'example.html';
});
</script>
</body>
</html>


        