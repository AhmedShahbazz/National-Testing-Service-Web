<?php
require 'config.php';

$id = $_GET['rn'];

// Prepare the delete statement
$query = "DELETE FROM apps WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_affected_rows($stmt) > 0) {
    // Record deleted successfully
    header("Location: delete.php?message=success");
} else {
    // Failed to delete the record
    header("Location: delete.php?message=failed");
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
