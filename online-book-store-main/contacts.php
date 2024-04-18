<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us - Online Book Store</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
}
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}
.contact-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.contact-form label {
    font-weight: bold;
}
.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.contact-form input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}
.contact-form input[type="submit"]:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>

<div class="container">
    <h2>Contact Us</h2>
    <div class="contact-form">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            
            // Here you can add your logic to handle the form submission,
            // such as sending an email, storing data in a database, etc.
            
            // For this example, we'll just display a confirmation message
            echo "<p>Thank you for contacting us, $name! We will get back to you soon.</p>";
        } else {
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <input type="submit" value="Submit">
        </form>
        <?php
        }
        ?>
    </div>
</div>

</body>
</html>
