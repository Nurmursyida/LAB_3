<?php
include_once ("dbconnect.php");
if (isset($_GET['srid'])){
    $srid = $_GET['srid'];
    $sqlsubject = "SELECT * FROM tbl_subjects WHERE subject_id = '$srid'";
    $stmt = $conn->prepare($sqlsubject);
$stmt->execute();
$number_of_result = $stmt->rowCount();
if ($number_of_result>0){
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $rows = $stmt->fetchAll();
}else{
    echo "<script>alert('Subject not available. Please login');</script>";
    echo "<script> window.location.replace('newsubject.php')</script>";
}
}else{
    echo "<script>alert('Page dont have. Please login');</script>";
    echo "<script> window.location.replace('newsubject.php')</script>";


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <script src="https://www.w3schools.com/lib/w3.js"></script>
        <script src="menu.js" defer></script>
        <link rel="stylesheet" href="styyle.css?v=<?php echo time () ; ?>">
    <title>𝕊𝕌𝔹𝕁𝔼ℂ𝕋 𝔻𝔼𝕋𝔸𝕀𝕃𝕊</title>
    </head>
    <style>
             .w3-grid-template {
                        display:grid;
                        padding :30px;
                        grid-template-columns: repeat(4, 1fr);
             }
                        </style>

    <body>
    <script>
                       window.alert("NEXT  PAGE");

                   </script>
    <section class="header">

<h1><a href="home.php" class="logo"> 𝕄𝕐 𝕋𝕌𝕋𝕆ℝ</a></h1>

<nav class="navbar">
<a href="">𝕽𝖊𝖌𝖎𝖘𝖙𝖊𝖗</a>
<a href="login.php">𝕷𝖔𝖌𝖎𝖓</a>
<a href="home.php">𝕳𝖔𝖒𝖊</a>
   <a href="newsubject.php">𝕮𝖔𝖚𝖗𝖘𝖊𝖘</a>
   <a href="newtutor.php">𝕿𝖚𝖙𝖔𝖗</a>
   <a href="">𝕾𝖚𝖇𝖘𝖈𝖗𝖎𝖕𝖙𝖎𝖔𝖓</a>
  <a href="">𝕻𝖗𝖔𝖋𝖎𝖑𝖊</a>
</nav>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>
<div>
<CENTER><h2><b>𝕊𝕌𝔹𝕁𝔼ℂ𝕋 𝔻𝔼𝕋𝔸𝕀𝕃𝕊</b></h2></CENTER>
    <?php
 foreach ($rows as $subject) {
    $srid = $subject ['subject_id'];
    $srname = $subject ['subject_name'];
    $srdesc = $subject ['subject_description'];
    $srprice=$subject ['subject_price'];
   $srsessions = $subject ['subject_sessions'];
    $srrating = $subject ['subject_rating'];
 }
 echo "<div class ='w3-center w3-border'> <br><img class='w3-image w3-border w3-padding' 
 src=courses/$srid.png" .
 " onerror=this.onerror=null;this.src='res/avatar.jpg'" .
 " style='width:30%;height:450px'></a><hr></div>";
  echo "<div class='w3-container w3-padding w3-margin w3-border w3-grey w3-center'><p><THE DETAILS></p><br><p>𝐍𝐚𝐦𝐞:
                     $srname<br>𝐃𝐞𝐬𝐜𝐫𝐢𝐩𝐭𝐢𝐨𝐧
                     :$srdesc <br>𝐏𝐫𝐢𝐜𝐞: $srprice<br>𝐒𝐞𝐬𝐬𝐢𝐨𝐧𝐬: $srsessions<br>𝐑𝐚𝐭𝐢𝐧𝐠: $srrating</p></div>
                     
                    </div>";


?>
</div>
<section class="footer">

   

<div class="credit"> Copyright &copy:2022 NUR MURSYIDA</span> | all rights reserved! </div>

</section>
     <script>
         function myFunction() {
             var x = document.getElementById("nav");
             if (x.className.indexOf("w3-show") == -1) {
                 x.className += " w3-show";
             } else { 
                 x.className = x.className.replace(" w3-show", "");
             }
         }
     </script>
</body>
</html>