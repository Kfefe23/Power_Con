<?php include("header.php"); ?>

<h1>Contact Us</h1>
<p>Feel free to contact us using the form below:</p>

<form action="process_contact.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    
    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea><br>
    
    <input type="submit" value="Submit">
</form>

<?php include("footer.php"); ?>
