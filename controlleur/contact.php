<?php
require_once("../db/connexion.php");
$to      = 'info@greenplanetcommunication.com';
// $to      = 'info@greenplanetcommunication.com';
if(isset($_POST)) {
//  var_dump($_POST);
$msg="";
 $description=$_POST["message"];
 $Nom=$_POST["nom"];
 $email=$_POST["email"];
 $langues=$_POST["langue"];
 $date_inscription=date("d-m-Y");
 if(isset($_POST['subject'])){
    $subject=$_POST['subject'];
 }
 else{
    $subject = 'Contact sur Creen Planet par '.$Nom;
 }
$message =' 
<html> 
<head> 
    <title>Welcome to CodexWorld</title> 
</head> 
<body> 
    <h1>Votre message par de '.$Nom.'</h1> </br>
    <span> email:'.$email.'</span></br>
    <p>'.$description.'</p>
   
</body> 
</html>'
;
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'Cc: nantejoe@gmail.com' . "\r\n";
$headers .='From:' .$email;
 $pdo_statement =  $pdo_conn->prepare("INSERT INTO green_contact (Nom,email,langue,date_inscription) VALUES (:Nom,:email,:langues,:date_inscription)");
 if($pdo_statement->execute( array( ':Nom'=>$Nom, ':email'=>$email,':langues'=>$langues,':date_inscription'=>$date_inscription))){
// mail($to, $subject, $message, $headers);
    $msg = array(
        'msg' => 'email a ete bien envoyé'
    );
 }
 else{
    $msg = array(
        'msg' => 'votre contact pas envoyer'
    );
 }

 echo json_encode($msg);
}


?>