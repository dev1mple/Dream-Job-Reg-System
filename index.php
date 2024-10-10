<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        input{
            font-size: 1.5cm;
            height: 50px;
            width: 200px;
        }
    </style>
</head>
<body>
    <h3>Welcome to the Pop-up shop stall. Input your details here to register.</h3>
    <form action="core/handleForms.php" method="POST">
        <p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
        <p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
        <p><label for="emailAddress">E-mail</label> <input type="text" name="emailAddress"></p>
        <p><label for="licenseNumber">License Number</label> <input type="text" name="licenseNumber"></p>
        <p><label for="contactNumber">Contact no.</label> <input type="text" name="contactNumber"></p>
        <p><label for="bodyNumber">Body Number</label> <input type="text" name="bodyNumber"></p>
        <p><label for="plateNumber">PlateNumber</label> <input type="text" name="plateNumber"></p>
        <p><label for="dateAdded">Date Added</label> <input type="text" name="dateAdded">
            <input type="submit" name="insterNewShopBtn">
        </p>
    </form>
</body>
</html>