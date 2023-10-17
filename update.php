<?php
require_once "connection.php";

$error = [];
$success = [];

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        $error[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Invalid email format";
    }

    if (empty($password)) {
        $error[] = "Password is required";
    } elseif (strlen($password) < 5) {
        $error[] = "Password is not strong enough";
    }

    if (empty($error)) {
        $update = "UPDATE users SET email='$email', password='$password' WHERE id=$id";

        $result = mysqli_query($connection, $update);

        if ($result) {
            $success[] = "Record updated successfully";
        } else {
            die(mysqli_error($connection));
        }
    }
}

// Check if the user's ID is set in the query parameters
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the user's data from the database based on the ID
    $select = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $select);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
    } else {
        die(mysqli_error($connection));
    }
} else {
    // Handle the case where the user's ID is not provided in the query parameters
    echo "User ID not specified.";
    exit;
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Details</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <h1>Update User Details</h1>
    
    <?php
    if (!empty($error)) {
        echo "<small style='color:red'>";
        foreach ($error as $err) {
            echo $err . "<br>";
        }
        echo "</small>";
    }
    ?>

    <?php
    if (!empty($success)) {
        echo "<small>";
        foreach ($success as $succ) {
            echo $succ . "<br>";
        }
        echo "</small>";
    }
    ?>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="email" placeholder="Enter new email" value="<?php echo $row['email']; ?>" autocomplete="on"><br><br>
        <input type="text" name="password" placeholder="Enter new password" value="<?php echo $row['password']; ?>" autocomplete="on"><br><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>

