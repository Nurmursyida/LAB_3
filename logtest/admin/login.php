<?php

if (isset($_POST['submit'])) {
    include 'dbconnect.php';
    $email = $_POST['email'];
    $pass = sha1($_POST['password']);
    $sqllogin = "SELECT * FROM tbl_admins WHERE admin_email = '$email' AND admin_password = '$pass'";
    $stmt = $conn->prepare($sqllogin);
    $stmt->execute();
    $number_of_rows = $stmt->fetchColumn();
    
    if ($number_of_rows  > 0) {
        session_start();
        $_SESSION["sessionid"] = session_id();
        $_SESSION["email"] = $email ;
        echo "<script>alert('Welcome to Tutor ! Login is Successful');</script>";
        echo "<script> window.location.replace('newsubject.php')</script>";
    } else {
        echo "<script>alert('Login is Failed.Try Again');</script>";
        echo "<script> window.location.replace('login.php')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="login.js" defer></script>
    <link rel="stylesheet" href="styyle.css?v=<?php echo time () ; ?>">
</head>
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
<body onload="loadCookies()">
    <header class="w3-header w3-grey w3-center w3-padding-32">
    
       <marquee> <h1><p>ＬＯＧＩＮ ＮＯＷ</p></h1></marquee>
    </header>
    <div style="display:flex; justify-content: center">
        <div class="w3-container w3-card w3-padding w3-margin" style="width:600px;margin:auto;text-align:left;">
            <form name="loginForm" action="login.php" method="post">
            <p>
                <label><b>Email</b></label>
 <input class="w3-input w3-round w3-border" type ="email"name="email" id="idemail"placeholder="Your email" required>
</p>
<p> 
<label><b>Password</b></label>
 <input class="w3-input w3-round w3-border" type="password"name="password" id="idpass" placeholder="Your pasword">
</p>
<p>
    <input class= "w3-check" type="checkbox" id="idremember"onclick="rememberMe()">     
    <label><b>Remember Me</b></label>
</p>
<p>
 <input class="w3-input w3-round w3-border w3-grey"type="submit"name="submit" id="idsubmit" ></p>
        </form>
            </form>
        </div>
    </div>
    <div id="cookieNotice" class="w3-right w3-block" style="display: none;">
        <div class="w3-red">
            <h4>Cookie Consent</h4>
            <p>This website uses cookies or similar technologies, to enhance your
                browsing experience and provide personalized recommendations.
                By continuing to use our website, you agree to our
                <a style="color:#115cfa;" href="/privacy-policy">Privacy Policy</a>
            </p>
            <div class="w3-button">
                <button onclick="acceptCookieConsent();">Accept</button>
            </div>
        </div>
    </div>
    <section class="footer">

   

   <div class="credit"> Copyright &copy:2022 NUR MURSYIDA</span> | all rights reserved! </div>

</section>


</body>
<script>
    let cookie_consent = getCookie("user_cookie_consent");
    if (cookie_consent != "") {
        document.getElementById("cookieNotice").style.display = "none";
    } else {
        document.getElementById("cookieNotice").style.display = "block";
    }
</script>

</html>