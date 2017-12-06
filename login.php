<?php
  //on definit une variable login et une variable password
  define('LOGIN','login');
  define('PASSWORD','password');
  //on initialise le champs du message d'erreur
  $errorMessage = '';
 
  // si champs remplis
  if(!empty($_POST)) 
  {
    // envoi des login et password
    if(!empty($_POST['login']) && !empty($_POST['password'])) 
    {
      // verification des id
      if($_POST['login'] !== LOGIN) 
      {
        $errorMessage = 'Mauvais login !';
      }
        elseif($_POST['password'] !== PASSWORD) 
      {  
        $errorMessage = 'Mauvais password !';
      }
        //si champs ok alors
        else
      {
        // ouverture de session
        session_start();
        // enregistrement du login en session
        $_SESSION['login'] = LOGIN;
        // bienvenue
        echo 'Bienvenue ', $_SESSION['login'];
        // fin du programme
        exit;
      }
    }
      // les id sont incorrects
      else
    {
      // message d'erreur
      $errorMessage = 'Merci de mettre vos identifiants';
      // et redirection immediate
      header('Location: index.php');
    }
  }
?>

    <form action="login.php" method="post">
      <fieldset>
        <legend>Identifiez-vous :</legend>
        <?php
          if(!empty($errorMessage)) 
          {
            echo '<p>', htmlspecialchars($errorMessage) ,'</p>';
          }
        ?>
       <p>
          <label for="login">Login :</label> 
          <input type="text" name="login" id="login" value="" />
        </p>
        <p>
          <label for="password">Password :</label> 
          <input type="password" name="password" id="password" value="" /> 
          <input type="submit" name="submit" value="Valider" />
        </p>
      </fieldset>
    </form>
