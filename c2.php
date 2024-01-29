<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-family: Arial, sans-serif;
        }
        
        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        h1 {
            font-family: Arial, sans-serif;
        }
        .delete-btn {
            background-color: #ff6961;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h1>Complaints Received</h1>

<?php
// Connexion à la base de données
$conn = mysqli_connect('localhost', 'root', 'rayen', 'student');

// Vérification de la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sélection des données depuis la table
$selectQuery = "SELECT * FROM t3";
$result = mysqli_query($conn, $selectQuery);

// Affichage des données sous forme de tableau HTML
echo "<table>
    <tr>
        <th>firstName</th>
        <th>lastName</th>
        <th>phone</th>
        <th>email</th>
        <th>aller</th>
        <th>retour</th>
        <th>photo</th>
        
    </tr>";
    

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['firstname']) . "</td>";
        echo "<td>" . htmlspecialchars($row['lastname']) . "</td>";
        echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['aller']) . "</td>";
        echo "<td>" . htmlspecialchars($row['retour']) . "</td>";
        echo "<td>" . htmlspecialchars($row['photo']) . "</td>";
        echo "</tr>";
}

echo "</table>";

// Fermeture de la connexion
mysqli_close($conn);
?>

</body>
</html>
