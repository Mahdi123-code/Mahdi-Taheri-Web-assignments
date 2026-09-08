<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</head>
<body>
    <h2>Form Control</h2>
    <form action="" class="form-control" method="post">
        <label for="db_name">Enter Database Name:</label>
        <input type="text" id="db_name" name="db_name" class="form-control" required>
        <button type="submit" class="btn btn-primary mt-2">Create Database</button>
    </form>


    
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db_name = $_POST["db_name"];

    // 2. Validate the database name
    if (preg_match('/^[a-zA-Z0-9_]+$/', $db_name)) {
        
        // 3. Connect to MySQL
        $conn = new mysqli("localhost", "root", "");

        // 4. Check connection errors
        if ($conn->connect_error) {
            echo "<div class='alert alert-danger'>Connection failed: " . $conn->connect_error . "</div>";
        } else {
            // 5. Create the database
            $sql = "CREATE DATABASE $db_name";
            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success'>Database created successfully!</div>";
            } else {
                echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
            }
            
            // 6. Close the connection
            $conn->close();
        }
    } else {
        echo "<div class='alert alert-danger'>Invalid name! Only letters, numbers, and underscores allowed.</div>";
    }
}
?>