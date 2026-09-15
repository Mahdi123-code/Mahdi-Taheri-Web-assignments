

<?php


require("db.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["full_name"] ?? "");
    $f_name = trim($_POST["f_name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $program = trim($_POST["program"] ?? "");
    $phone = trim($_POST["phone"] ?? ""); 

        
    $db_query = "INSERT INTO applications (full_name, father_name, email, phone, program) VALUES (?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($db_query)){
        $stmt->bind_param(
            "sssss",
            $name,
            $f_name,
            $email,
            $phone,
            $program,
        );

        if ($stmt->execute()){
            echo "<div class='alert alert-success'>Students Registered successfully</div>";
        } else {
            echo "<div class='alert alert-danger'>Error!</div>".$stmt->error;
        }
    $stmt->close();
    }else {
        $message = "<div class='alert alert-danger'>Error preparing statement: " . $conn->error . "</div>";
    }
}
$sql = "SELECT * FROM applications ORDER BY id";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Student Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
.container{
    background-color: #f8f9fa;
}
</style>
<body class="container mt-5">

    <div class="form_container" style="max-width: 500px; margin: 30px auto;">
        <h2>Add New Student</h2>
        

        <form method="POST" class="mt-4">
            <div class="mb-3">
                <label class="form-label">Full Name:</label>
                <input type="text" name="full_name" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Father Name:</label>
                <input type="text" name="f_name" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Phone:</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Program:</label>
                <input type="text" name="program" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Save Student</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
        </form>
        <div class="success" id="successMessage"></div>
    </div>

    <div class="container">
        <table class="table">
            <tr class="table-header">
                <th>ID</th>
                <th>Full Name</th>
                <th>Father Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Program</th>
            </tr>
            <?php
            if ($result->num_rows>0){
                while($student = $result->fetch_assoc()){
                ?> 
                <tr class="table-data hover">
                    <td><?php echo $student["id"];?></td>
                    <td><?php echo $student["full_name"];?></td>
                    <td><?php echo $student["father_name"];?></td>
                    <td><?php echo $student["email"];?></td>
                    <td><?php echo $student["phone"];?></td>
                    <td><?php echo $student["program"];?></td>

                </tr>
            <?php
            
                }
            }
            ?>
            
        </table>
    </div>

</body>
</html>

<?php
$conn->close();

?>
