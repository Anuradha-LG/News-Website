<?php
// Include database connection file
include('db.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validate form data
    if (empty($fullname) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        echo "All fields are required.";
    } else {
        try {
            // Prepare the SQL query to insert data into the database using PDO
            $sql = "INSERT INTO contact_form (fullname, email, phone, subject, message) 
                    VALUES (:fullname, :email, :phone, :subject, :message)";
            
            // Prepare the statement
            $stmt = $pdo->prepare($sql);

            // Bind parameters to avoid SQL injection
            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':subject', $subject);
            $stmt->bindParam(':message', $message);

            // Execute the query
            if ($stmt->execute()) {
                echo "Thank you for contacting us. We will get back to you soon!";
            } else {
                echo "Error: Failed to submit the form.";
            }
        } catch (PDOException $e) {
            // Handle any exceptions (e.g., DB connection or query issues)
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
