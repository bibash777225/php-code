<?php
// Initialize an empty error message
$error = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate the input: make sure "username" is not empty
    if (empty($_POST['username'])) {
        $error = "Username is required.";
    } else {
        // If validation passes, you would normally process the data here
        // For demonstration, we simply show a success message
        echo "<p>Form submitted successfully! Hello, " .
             htmlspecialchars($_POST['username']) . ".</p>";
    }
}
?>

<!-- The HTML form -->
<form method="post">
    <label for="username">Username:</label>

    <!--
        Sticky Form Principle:
        Use isset() to check if the user previously submitted a value.
        If set, output it into the value attribute so it doesn't disappear.
    -->
    <input type="text" name="username" id="username"
           value="<?php
                if (isset($_POST['username'])) {
                    echo htmlspecialchars($_POST['username']);
                }
           ?>">

    <button type="submit">Submit</button>
</form>

<!-- Display an error message if validation failed -->
<?php
if (!empty($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>