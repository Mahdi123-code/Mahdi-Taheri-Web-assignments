<?php
$alertMessage = "";
$alertType = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = trim($_POST["full_name"]);
    $email = trim($_POST["email"]);
    $department = trim($_POST["department"]);

    // TODO 2: Validate that fields are not empty
    if (!empty($fullName) && !empty($email) && !empty($department)) {
        
        $conn = new mysqli("localhost", "root", "", "wis_lab");
        
        if ($conn->connect_error) {
            $alertMessage = "Connection failed: " . $conn->connect_error;
            $alertType = "danger";
        } else {
            // Challenge Task: Securely insert data using Prepared Statements
            // prepare() parses the SQL framework first to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO students (full_name, email, department) VALUES (?, ?, ?)");
            
            // bind_param() safely links user inputs to the "?" place-markers as strings ("sss")
            $stmt->bind_param("sss", $fullName, $email, $department);
            
            // execute() runs the securely isolated query string
            if ($stmt->execute()) {
                $alertMessage = "Student added successfully.";
                $alertType = "success";
            } else {
                $alertMessage = "Error inserting record: " . $stmt->error;
                $alertType = "danger";
            }
            
            // Close statement and connection
            $stmt->close();
            $conn->close();
        }
    } else {
        $alertMessage = "All fields are required!";
        $alertType = "danger";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Student Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div style="max-width: 500px; margin: 0 auto;">
        <h2>Add New Student</h2>
        
        <?php if (!empty($alertMessage)): ?>
            <div class="alert alert-<?php echo $alertType; ?> mt-3"><?php echo $alertMessage; ?></div>
        <?php endif; ?>

        <form method="POST" class="mt-4">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="full_name" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Department</label>
                <input type="text" name="department" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Save Student</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
        </form>
    </div>

</body>
</html>
