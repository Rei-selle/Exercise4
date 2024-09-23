<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="team.css">
</head>
<body> 
    <ul class="nav"> 
        <li><a href="team.php">Our Team</a></li>
        <li><a class="active-item"  href="profile.php">View</a></li>
        <li><a href="sample.php">Create</a></li>      
      </ul>
<div class="team" style="   grid-template-columns: auto;">
    <div class="team-container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['about'], $_POST['image'])) {
        $name = $_POST['name'];
        $about = $_POST['about'];
        $image = $_POST['image'];

        echo '<div class="profile">';
        echo '<div class="magicpattern"><img onmouseover="bigImgRei(this)" onmouseout="normalImgRei(this)" src="img/' . $image . '" alt="' . $name . '" class="profile-img charles-img"></div></div>';
        echo '<p class="profile-name">' . $name . '</p>';
        echo '<div class="profile-info">' . $about . '</div>';
        echo '</div>';
    } else {
        echo 'No profile data submitted.';
    }
    ?>  
        </div>
    </div>
</body>
</html>