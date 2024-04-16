<?php
session_start();
include "php/config.php";

if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
    exit();
}

$sql = "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> 
     <link rel="stylesheet" href="css/home.css">
    <title>Cent Tipid Home</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
</head>
<body>
<?php include 'nav.php';?>

  <section class="dashboard">
        <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search">
                
            </div>
            <?php
            if (isset($row['img'])) {
            ?>
            <img src="php/images/<?php echo $row['img']; ?>" alt="">
            <?php
            }
            ?>
             <div class="details">
                <span><?php echo $row['fname'] . ' ' . $row['lname']; ?></span>
            </div>
        </div>
        <section class="hero">
            <div class="left">
                <h3 class="head_text">Cent-Tipid: Collaborative Budget Planning Platform</h3>
                <p class="body_text">
                        Cent-Tipid simplifies budget planning by offering a collaborative space where users can track expenses, set spending targets, and communicate with budgeting partners. With customizable features and real-time notifications, Cent-Budget empowers individuals and teams to take control of their finances effortlessly.
                        
                </p>
                <a href="#" class="link">Learn more</a>
            </div>
            <div class="right">
                <div class="img_container">
                    <img src="image/undraw_financial_data_re_p0fl.svg" alt="" class="img" />
                </div>
            </div>
        </section>


<script src="javascript/home.js"></script>
<script src="javascript/script.js"></script>


</body>
</html>
