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
     <link rel="stylesheet" href="css/budget.css">
    <title>Cent Tipid Budget</title>
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
                <h3 class="head_text">Budget</h3>
                <p class="body_text">
                        
                </p>
                
            </div>
            
        </section>


<script src="javascript/home.js"></script>
<script src="javascript/script.js"></script>
</body>
</html>