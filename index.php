<?php
include 'fonction.php';

session_start();

if (isset($_SESSION['page'])){
    $_SESSION['page'] = 'text';

}

if (isset($_POST['email'])){
    $_SESSION['email'] = $_POST['email'];
    $email = $_POST['email'];
}

if (isset($_POST['btnCompte'])){
    $Questionnaire = false;
  $_SESSION['page'] = 'text';
    $lettre = $_POST['lettre'];
    //$chaine est placée dans le fichier 'fonction.php'
    $resultat = mb_substr_count($chaine,$lettre);
}    

if (isset($_POST['btnQuestionnaire'])){
    $Questionnaire = true;
}



if(isset($_POST['btn_deconnexion'])) {
    session_destroy();
    header("location: index.php");
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
	<meta charset="utf-8" />
    <link href="atelier.css" rel="stylesheet" />
    <link href="styles.php" rel="stylesheet" type="text/css" media="all" />
    
</head>
<body>

    <?php

        if (!isset($_SESSION["email"] ))

        {

          echo '<form action="index.php" method="POST">
            
                
                <div id="access">
                <img class="logo2" src="PHP-logo.png" />
                <h1>Accès Language PHP</h1>
                    <label>Votre Email</label><br/>
                    <input type="email" name="email" required/>

                </div>
                <div>
                    <br/>
                    <button class="btn" id="btn_session" name="btn_session" type="submit">Envoyer</button>
                </div>
            </form>';
                }

        else {
            
            ?>
            
               
        
    <header>
       
        <ul>
            
            
            <li>
                <form method="POST">
                <button class="btn" name="btnCompte" type="submit" required>Compter la lettre suivante : </button> 
                <input type="text" id="txtLettre" name='lettre' maxlength="1" pattern="[a-z]{1}" required />
                </form>
                

            </li>
            <li>
                <form method="POST">

                <button class="btn" name="btnQuestionnaire" type="submit">Répondre au questionnaire</button>
                </form>
            </li>
        
        <?php if (isset($_POST['btnCompte'])){
            ?>
            <li id="reponse"> <?php echo 'La lettre '.$lettre. ' apparait '.$resultat. ' fois !';?></li>
                <?php
                }
                ?>
        
                        
            <li id="user">Bienvenue 
                <?php echo $_SESSION['email'];
                ?>
            </li>
        </ul>
        <div id="deconnexion">
                <form method="POST">
                <button class="btn" type="submit" name="btn_deconnexion">Déconnexion</button>
                </form>
        </div>
        
         
       
        <div id="divNbOccurences"></div>
        <h1>Le Language PHP</h1>
    </header>
        

    <section id="sectionTexte">
        
        <?php
            if (isset($_POST['btnCompte'])){
                ?>
            
        <img class="logo" src="PHP-logo.png" />
        <div>
            <p> <?php  echo (str_replace($lettre, '<span class="orange">'.$lettre.'</span>', $chaine));?>
                
            </p>
        </div>
            
                <?php
                }
                else{
            ?>
        <img class="logo" src="PHP-logo.png" />
        <div>
            <p> <?php  echo $chaine;?>
                
            </p>
        </div>
            <?php

                }

        ?>    

    </section>
           
              
    <?php
                }
    ?>

    
     
            <?php if (isset($_POST['btnQuestionnaire'])){
        
                ?>
    
    <section id="sectionQuestionnaire">
            

       
        
        <h1>Questionnaire</h1>
       
        <div>
          <form method="POST">
            <label>Avez-vous aimé ce texte ?</label>

            <input type="radio" name="rdoQ1" id="rdo1" value="1" required /> oui
            <input type="radio" name="rdoQ1" id="rdo2" value="0" required /> Non
        </div>
        <div>
            <label>Donnez une note de 1 à 5 à ce texte :</label> 
            <input type="text" name = "txtNote" id="txtNote" maxlength="1" pattern="[1-5]{1}" required />
        </div>
        <button class="btn" name="btnValider" type="submit">Valider le questionnaire</button>
           </form> 
    </section>
                
                <?php
                }
            ?>

    

    <?php    if (isset($_POST['btnValider'])){
                    
        ?>

        <div class="confirmation">
            <strong>Merci d'avoir répondu au questionnaire</strong>
        </div>
        <?php
            }


                   
    ?>

</body>
</html>

