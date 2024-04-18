<?php
require_once 'database.php';
require_once 'contact.php';

Contact::setKoneksi($conn);
$result = Contact::select();

$query = "SELECT * FROM contact";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="#"><img src="akun.png" alt="account Icon"> Account</a></li>
            <li><a href="#"><img src="setting.png" alt="Settings Icon"> Settings</a></li>
            <li><a href="#"><img src="logout.png" alt="Logout Icon"> Logout</a></li>
        </ul>
    </div>
    <div class="main">
        <h2>List Contact</h2>
        <table>
            <thead>
                <tr>
                    <th>No ID</th>
                    <th>No HP</th>
                    <th>Owner</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Tampilan data kontak dalam tabel
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['No_ID'] . "</td>"; 
                    echo "<td>" . $row['No_HP'] . "</td>"; 
                    echo "<td>" . $row['Pemilik'] . "</td>"; 
                    echo "<td>";
                    echo "<button>Edit</button>";
                    echo "<button>Delete</button>";
                    echo "</td>";
                    echo "</tr>";
                }
                
                // Bebaskan hasil
                mysqli_free_result($result);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
?>
