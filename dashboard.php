<?php

include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>User Table</title>
</head>
<body>
<form action="submit.php" method="post">
        <!-- Text Input -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <!-- Select Dropdown -->
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <br>

        <!-- Radio Button Group -->
        <label>Choose an Option:</label>
        <input type="radio" id="option1" name="option" value="option1">
        <label for="option1">Option 1</label>
        <br>
        <label for="birthdate">Date of Birth:</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <br>
        

        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>

</body>
</html>
