<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>
    <link rel="stylesheet" href="team.css">
</head>
<body>
  <ul class="nav"> 
    <li><a href="team.php">Our Team</a></li>
    <li><a href="profile.php">View</a></li>
    <li><a class="active-item" href="sample.php">Create</a></li>      
  </ul>
<form method="POST" action="profile.php" class="form-create">
  <h1 style="font-family: Arial, Helvetica, sans-serif; position: relative ; top: 10px;">Create</h1>
    <input type="text" id="name" name="name" placeholder="Enter your name:" required><br>
    <textarea name="about" rows="6" cols="40" placeholder="Write About yourself:"></textarea><br>
    <input type="text" id="image" name="image" placeholder="Enter your filename:" required><br>
    <input type="submit" value="Submit" class="submitbtn">
</form>
</body>
</html>