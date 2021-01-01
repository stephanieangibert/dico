<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="public/css/style.css"> -->
    <link rel="stylesheet" href="public/css/style3.css">
    <title>Document</title>
</head>
<body>
<header>
        <h1>L'or des mots du dico</h1>
        <div class="container-menu">
            <div class="circle-menu">
                <a href="index.php?action=concept" class="lien">
                     <p class="lienMenu">concept</p> 
                </a>
                <a href="index.php?action=menuConnexion" class="lien">
                     <p class="lienMenu">connexion</p> 
                </a>
                <a href="index.php?action=boite" class="lien">
                     <p class="lienMenu">boîte à mots</p>
                </a>
            </div>
            <div class="btn-circle">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </header>
<div class="containerAll">
<div class="container1" id="c1">
<p><i class="fas fa-user-check"></i></p>
<p>Connecte-toi</p>

<form action="index.php?action=connexion" method="POST">

<div class="input_container">
    <span class="input_icon"><i class="fas fa-envelope-open-text"></i></span>
 
    <input type="mail" name="email">
  </div>
  <div class="input_container">
    <span class="input_icon2"><i class="fas fa-unlock-alt"></i></span>
    <input type="password" name="mdp1">
  </div>  
  <br>
  <div  class="mdpOublie">Mot de passe oublié</div>
  <br>  
  <input type="submit" value="envoyer" id="submit" name="submit2">
 
</form>

<div class="pei" id="pei">
    <p>Pas encore inscrit ?</p>
</div>

<span class="couverture" id="couv"><p id="clicIci">Click ici</p></span>
</div>

<div class="container" id="bloc">
    <p><i class="fas fa-user"></i></p>
    <p>Inscription</p>
 <form action="index.php?action=subscribe" method="POST">

 <div class="input_container">
    <span class="input_icon"><i class="fas fa-envelope-open-text"></i></span>
    <input type="mail" name="email">
  </div>
  <div class="input_container">
    <span class="input_icon"><i class="fas fa-envelope-open-text"></i></span>
    <input type="text" name="pseudo" placeholder="pseudo">
  </div>
  <div class="input_container">
    <span class="input_icon"><i class="fas fa-unlock-alt"></i></span>
    <input type="password" name="mdp1">
  </div>
  <div class="input_container">
    <span class="input_icon"><i class="fas fa-unlock-alt"></i></span>
    <input type="password" name="mdp2">
  </div>
  <br>  <br>  <br>
  <input type="submit" value="envoyer" id="submit" name="submit">
 </form>
</div>
<div class="container3" id="bloc3">
  <form action="index.php?action=token" method="POST">
    <div>Récupérez votre mot de passe</div>   
    <input type="mail" placeholder="Saississez votre email" name="email">
    <input type="submit" value="Envoyer" name="submit3">
  </form>
</div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>    
    <script src="public/js/connexion.js"></script>
    <!-- <script src="public/js/app2.js"></script> -->
    <!-- <script src="public/js/app3.js"></script>   -->
</body>
</html>