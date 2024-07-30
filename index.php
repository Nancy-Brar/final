<?php 
$title = "Home";
require_once './includes/header.php';
?>

<div class="container">
    <h2>Submit a New Message</h2>
    <form action="submit.php" method="POST">
        <div class="form-group">
            <label for="message">Message:</label>
            <input type="text" id="message" name="message" class="form-control" maxlength="50" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <a href="showAll.php" class="btn btn-secondary">Show all records</a>
</div>

<?php 
require_once './includes/footer.php';
?>
