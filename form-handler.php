// form_handler.php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Here you can add code to save the form data to a database or send an email
    echo "<h2>Form Submitted</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
} else {
    echo "Invalid request method.";
}
?>
