<?php
require_once "connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform the delete operation
    $delete = "DELETE FROM users WHERE id=$id";
    $result = mysqli_query($connection, $delete);

    if ($result) {
        echo "Record with ID $id deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
} else {
    echo "User ID not specified.";
}

mysqli_close($connection);
?>
