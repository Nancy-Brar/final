<?php 
    $title = "View Records";
    require_once './includes/header.php';
    require_once './db/conn.php';  
    
    $sql = "SELECT * FROM string_info";
    $result = mysqli_query($conn, $sql);

    if($result){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row["string_id"] . " ";
                echo $row["message"]  . "<br>";
            }
        }
        else{
            echo "No records found";
        }
    }
    else{                           
        echo "Error executing query: " . mysqli_error($conn);
    } 


?>

<form action="delete.php" method="POST">
    <label for="string_id">Enter ID to delete:</label>
    <input type="number" id="string_id" name="string_id" required>
    <button type="submit" name="delete">Delete</button>
</form>

<?php 
    require_once './includes/footer.php';
 ?>