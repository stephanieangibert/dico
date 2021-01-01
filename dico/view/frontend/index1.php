<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">       
    <link rel="stylesheet" href="public/css/style.css">
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
                <a href="index.php?action=connexion" class="lien">
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
    <div class="container">
        <section class="reponse">
<form class="carreReponse" method="POST" action="index.php?action=page&amp=id=">

      
           <input type="text" id="leMotChoisis" name="mot">          
           <textarea name="def"  cols="30" rows="10" id="definition"></textarea>
           <input type="submit" name="submitMot" value="enregistrer" id="reponseBtn" class="etat"> 
       
 </form> 
      <div class="boiteSecrete">
           <ul>
               <li>Choisis<div id="mot1"></div></li>
               <li>ton<div id="mot2"></div></li>
               <li>mot....<div id="mot3"></div></li>
           </ul>  
            
      
            </section>
         
      
  <section id="chercheUneDefinition">
      <div class="scrabble">
   <span class="mots">M</span>
   <span class="mots">O</span>
   <span class="mots">T</span>
   <span class="mots">S</span>

      </div>
      <form method="" class="form1">
     
   <div class="choix">
  <input type="text" name="text" id="text">
  <label for="Text">Saisis ton mot...</label>
  <span class="focus"></span>
   <input type="submit" value="Ok" id="def" name="submit">
   </div>

</form>
<div class="synonyme">
    <span>S</span>
    <span>Y</span>
    <span>N</span>
    <span>O</span>
    <span>N</span>
    <span>Y</span>
    <span>M</span>
    <span>E</span>
</div>
<div class="carreSynonyme">
    <div class="syn1">
                    <p id="synonyme1"></p> 
               </div>  
               <div class="syn2">    
                   <p id="synonyme2"></p>
               </div>   
            <div class="syn3">   
                    <p id="synonyme3"></p> 
               </div>  
               <div class="syn4">
                   <p id="synonyme4"></p> 
                </div> 
                <div class="syn5">           
                   <p id="synonyme5"></p> 
               </div>   
    
</div>
</section>
</div>
   <script src="public/js/app.js"></script>
   <script src="public/js/app2.js"></script>
   <script src="public/js/app3.js"></script>
</body>
</html>