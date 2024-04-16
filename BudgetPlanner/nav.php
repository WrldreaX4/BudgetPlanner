<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> 
     <link rel="stylesheet" href="css/nav.css">
  

    <title>CentTipid Home</title>
</head>
<body>
<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="image/logo.png" alt="CentTipid Logo">
        </div>
        <span class="logo_name">CentTipid</span>
    </div>
    <div class="menu-items">
        <ul class="nav-links">
            <li><a href="home.php">
                <i class="uil uil-home"></i>
                <span class="link-name">Home</span>
            </a></li>
            <li><a href="budget.php">
            <i class="uil uil-coins"></i>
                <span class="link-name">Budget</span>
            </a></li>
            <li><a href="calculator.php">
            <i class="uil uil-calculator"></i>
                <span class="link-name">Calculator</span>
            </a></li>    
        </ul>
        <ul class="logout-mode">
            <li><a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>">
                <i class="uil uil-signout"></i>
                <span class="link-name">Logout</span>
            </a></li>
            <li class="mode">
                <a href="#">
                    <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>
                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
        </ul>
    </div>
</nav>

</body>
</html>