<?php
error_reporting(0);
include_once("dbconnect.php");

if (isset($_GET['submit'])) {
    $operation = $_GET['submit'];
    if ($operation == 'search') {
        $search = $_GET['search'];
        $sqlsubject = "SELECT * FROM tbl_subjects WHERE subject_name LIKE '%$search%'";
    }
} else {
    $sqlsubject = "SELECT * FROM tbl_subjects";
}

if (isset($_GET['pageno'])) {
    $pageno = (int)$_GET['pageno'];
} else {
    $pageno = 1;
}
$results_per_page = 10;
$page_first_result = ($pageno-1) * $results_per_page;

$stmt = $conn->prepare($sqlsubject);
$stmt->execute();
$number_of_result = $stmt->rowCount();
$number_of_page = ceil($number_of_result / $results_per_page);
$sqlsubject= $sqlsubject . " LIMIT $page_first_result , $results_per_page";
$stmt = $conn->prepare($sqlsubject);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();
$conn= null;

function truncate($string, $length, $dots = "...") {
    return (strlen($string) > $length) ? substr($string, 0, $length - strlen($dots)) . $dots : $string;
}
?>

<!DOCTYPE html>
<html>
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
        <title>MyTutor</title>
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


        <br>
        <CENTER><h1><b>ℂ𝕆𝕌ℝ𝕊𝔼𝕊 𝕃𝕀𝕊𝕋</b></h1></CENTER>
        
        <div class="container">
            <div class="w3-padding w3-margin w3-round">
                <form>
                    <div style="padding-right:4px">
                        <table>
                            <tr align="right">
                                <center><td style="width:80%"><input class="w3-input w3-block w3-round w3-border" type="search" name="search" placeholder="Search the courses"></td></center>
                                <center><td><button class="w3-button w3-light-grey w3-round w3-right" style="width:auto;" type="submit" name="submit" value="search">Search</button></td></center>
                            </tr>
                        </table>
                    </div>
                </form>
              
            </div>
            <CENTER><h6><b>*click to image for more details</b></h6></CENTER>
            <div class="w3-grid-template">
                <?php
                $i = 0;
                foreach ($rows as $subject) {
                    $i++;
                    $srid = $subject ['subject_id'];
                    $srname = $subject ['subject_name'];
                   $srprice=$subject ['subject_price'];
                 
                    echo "<div class='w3-card-4 w3-round' style='margin:4px;'>
                    <header class='w3-container w3-grey'><h7><b>$srname</b></h7></header>";
                    echo "<a href='subjectdetails.php?srid=$srid' style='text-decoration: none;'> <img class='w3-image' 
                    src=courses/$srid.png" .
                    " onerror=this.onerror=null;this.src='res/avatar.jpg'" .
                    " style='width:100%;height:180px'></a><hr>";
                    echo "<div class='w3-container w3-padding w3-margin'><p>Name:
                     $srname <br>Price: $srprice</p></div>
                     
                    </div>";

                }
                ?>
            </div>

            <?php
            $num = 1;
            if ($pageno == 1) {
                $num = 1;
            } else if ($pageno == 2) {
                $num = ($num) + 10;
            } else {
                $num = $pageno * 10 - 9;
            }
            echo "<div class='w3-container w3-row'>";
            echo "<center>";
            for ($page = 1; $page <= $number_of_page; $page++) {
                echo '<a href = "newsubject.php?pageno=' . $page . '" style=
                    "text-decoration: none">&nbsp&nbsp' . $page . ' </a>';
            }
            echo " ( " . $pageno . " )";
            echo "</center>";
            echo "</div>";
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