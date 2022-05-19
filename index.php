<!DOCTYPE html>
<html>
    <head>
        <title>Slutuppgift</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
        <link rel="stylesheet" href="style.css">
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
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="potd.php">Picture of the day</a>
            <a id="login" class="nav-item nav-link" href="userpage.php">Log in</a>
          </div>
        </div>
      </nav>

      <!-----------BILD UPPLOADS----------------------------------------------------->

      <div id="text1">
          <div>
          <article><h4>The majority of your brain is fat.</h4>You can literally call someone a fathead, but it's still unkind: According to Psychology Today, 60 percent of human brain matter is made of fat.</article>
          <br>
          <article><h4>Did you know?</h4>The birth of Josephine Myrtle  Corbin took the world by suprise when she was born with four legs and two sets of genitals</article>

          </div>
      </div>

      <div id="feed">
          <div>
            <div id="bild" class="card" style="width: 18rem;">
              <img class="card-img-top" src="icon/dank meme icon.ico" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Like</a>
                  </div>
              </div>
          </div>
      </div>

      <div id="text2">
          <div>
          <article><h4>High heels were originally worn by men.</h4>In the 10th century, men in Europe adopted the now-gendered fashion choice of heels to make it easier to ride their horses: Adding heels to their boots made it easier to stay in their stirrups. As Slate explains, "The Persian cavalry wore inch-high heels, and the trend spread to Europe. Since they showed that the wearer owned and maintained horses, high heels became associated with the upper class."</article>
          </div>
      </div>

      <!-----------PHP----------------------------------------------------->

      <?php
        
      ?>
    </body>
</html>