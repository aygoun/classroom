<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function get_instagram_profile_pic($username) {
    $options = array(
        CURLOPT_RETURNTRANSFER => true,   // return web page
        CURLOPT_HEADER         => false,  // don't return headers
        CURLOPT_FOLLOWLOCATION => true,   // follow redirects
        CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
        CURLOPT_ENCODING       => "",     // handle compressed
        CURLOPT_USERAGENT      => "test", // name of client
        CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
        CURLOPT_TIMEOUT        => 120,    // time-out on response
    );
    $url = 'https://www.instagram.com/' . $username . '/?__a=1';
    $ch = curl_init($url);
    curl_setopt_array($ch, $options);
    $content  = curl_exec($ch);
    curl_close($ch);
    // Parse Json
    $resArr = array();
    $resArr = json_decode($content, true);
    $profile_pic = $resArr['graphql']['user']['profile_pic_url_hd'];
    return $profile_pic;
}

require 'connex.php';

if(isset($_POST['valider'])){
  $firstname=htmlspecialchars($_POST['inputfirstname']);
  $lastname=htmlspecialchars($_POST['inputlastname']);
  $username=htmlspecialchars($_POST['inputinstagram']);
  $class=$_POST['exampleFormControlSelect1'];


  $result = $bdd->prepare('SELECT * FROM class_db_V2 WHERE instagram = ?');
  $result->execute(array($username));
  $donnees = $result->fetch();

  if ($donnees['instagram'] == $username) {
     header("refresh:0;url=classes.php?w=$class");
     //echo "Vous êtes déjà enregsitré(e) !";
   }
   else{
     $profile_pic = get_instagram_profile_pic($username);
     $resultat = $bdd->prepare('INSERT INTO `class_db_V2` (`firstname`, `lastname`, `instagram`, `url_profile_pic`, `classe`, `current_datetime`) VALUES (?,?,?,?,?,NOW() )');
     $resultat->execute(array($firstname, $lastname, $username, $profile_pic, $class));
     //print_r($resultat->errorInfo());
     header("refresh:0;url=classes.php?w=$class");
     //echo "Votre requête a été enregsitré !";
   }
}
else {
  header("refresh:0;url=register.php");
  echo "Votre requête n'a pas fonctionnée !";
}
?>
