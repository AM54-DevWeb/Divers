<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>theme2</title>


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

<script>
            jQuery(function(){
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 20 ) { 
                            $('#scrollUp').css('right','10px');
                        } else { 
                            $('#scrollUp').removeAttr( 'style' );
                        }

                    });
                });
            });
</script>


</head>
<body>
<div class="main">
    
<link rel="stylesheet" href="style.css">
<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      AM54
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">
    <a href="index.php">Accueil</a>
    <a href="portfolio.php">Portfolio</a>
    <a href="RDV.php">Contact</a>
    <a href="https://google.fr">Sign in</a>
    <a href="https://twitter.com/?lang=fr" target="_blank">Twitter</a>
  </div>
</div>
