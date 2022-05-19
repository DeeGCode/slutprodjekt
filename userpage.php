<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Slutuppgift</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
    </head>
    
    <body>
<!-----------NAV BAR----------------------------------------------------->

    <nav class="navbar navbar-expand-lg navbar-custom">
  <a class="navbar-brand" href="#"><img id="icon" src="icon/dank meme icon.ico" width="80" height="80" alt=""> IMG Pog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Picture of the day</a>
      <a id="login" class="nav-item nav-link" href="userpage.php">Log in</a>
    </div>
  </div>
</nav>

<!-----------FORM----------------------------------------------------->
    <div id="form">
        <form action="" method="POST">
            Användarnamn <br>
            <input type="text" name="annamn">
            <br>
            Lösenord <br>
            <input type="password" name="lös">
            <br>
            Email <br>
            <input type="email" name="emel">
            <br>
            <br>
            <input type="submit" value="Registrea dig" name="registrering">
        </form>
    </div>

<!-----------BILD UPPLOAD----------------------------------------------------->
<div id="bilduppload">
    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <form action="upploader.php" enctype="multipart/form-data" class="dropzone" id="image-upload">

                    <div>

                        <h3>Uppload your file</h3>

                    </div>

                </form>

                <button id="Fileupload">Upload Files</button>

            </div>
        </div>
    </div>
</div>
<!-----------PHP----------------------------------------------------->

<?php
if(isset($_POST["registrering"])){
    
    $serverName = "localhost";
    $userName ="root";
    $password="";
    $db = "slutuppgift";

    $emel = $_POST['emel'];
    $annamn = $_POST['annamn'];
    $lös = $_POST['lös'];

    $conn = mysqli_connect($serverName,$userName,$password,$db);
    if(!$conn){
        die("connection failed".mysqli_connect_errno());
    }

    $sqlLäggtillaol = "INSERT INTO users(uname,pass,email) VALUES('$annamn','$lös','$emel')";

    //it$cookie_user = "user";
    //$cookie_value = $annamn;
    //$logintext="#login";


    //setcookie($cookie_user,$cookie_value,time()+(86400 * 30));
    //str_replace('Log in',$cookie_value,$logintext);
    //echo($cookie_value);

    //$_SESSION[$cookie_value];

}
?>
    </body>
</html>