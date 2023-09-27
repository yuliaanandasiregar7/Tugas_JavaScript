
<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    
</head>
<body>
<style>
       
        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="username"],
        input[type="password"] {
            width: 50%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

       

      
    </style>
    <h1>Form Login</h1>
    <form method="post" action="form_login.php">
        <label for="username">Username:</label>
        <input type="username" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    // Include your login function here
    include('login_function.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Call the login function to check credentials
        if (cekLogin($username, $password)) {
            header("Location: admin.php");
            exit;
        } else {
            echo "<p>Username atau password salah.</p>";
        }
    }
    ?>
<?php
// Function to check login credentials
function cekLogin($username, $password) {
    // Ganti dengan kondisi sesuai kebutuhan Anda
    if ($username === "admin" && $password === "mimin") {
        return true;
    } else {
        return false;
    }
}
?>
</body>
</html>