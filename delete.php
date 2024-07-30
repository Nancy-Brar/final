<?php 
$title = "Delete Records";
require_once './includes/header.php';
require_once './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['string_id'])) {
        $id = $_POST['string_id'];

        // Prepare the SQL statement
        $stmt = $conn->prepare("DELETE FROM string_info WHERE string_id = ?");
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        // Bind parameters
        $stmt->bind_param("i", $id);

        // Execute the statement and check for success
        if ($stmt->execute()) {
            echo "Record Deleted Successfully!";
        } else {
            echo "Error executing query: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
    } else {
        echo "Error: ID not set.";
    }
}

$conn->close();
?>

<?php 
require_once './includes/footer.php';
?>
