<?php 
require_once("../db/connexion.php");
require_once("../langues/decide-lan.php");

$message_sent = false;

if(isset($_POST["adresse_email"]) && $_POST["adresse_email"] != ""){
   
    if(filter_var($_POST["adresse_email"], FILTER_VALIDATE_EMAIL)){
        
        $name = $_POST["nomComplete"];
        $adresse_email = $_POST["adresse_email"];
        $message_subject = $_POST["message_subject"];
        $message_content = $_POST["message_content"];
        $date_inscription=date("d-m-Y");
        $langues=$_POST["langue"];

        $to = "masycharlar@gmail.com";

        $titleMail = $lang['mail-title'];
        $h1Mail = $lang['mail-h1'];
        $adressMail = $lang['mail-adress'];
        $descriptionMail = $lang['mail-descri'];

        $body = "
        <html> 
        <head> 
            <title>'.$header.'</title> 
        </head> 
        <body> 
            <h1>'.$h1Mail.+.$name.'</h1> </br>
            <span>'.$adressMail.+.$adresse_email.'</span></br>
            <p>'.$message_content.'</p>
          
        </body> 
        </html>
        ";

        $header .= $titleMail."\r\n";
        $header .= $message_subject."\r\n";

        mail($to, $header, $body);
    } 
    $pdo_statement =  $pdo_conn->prepare("INSERT INTO green_contact (Nom,email,langue,date_inscription) VALUES (:Nom,:email,:langues,:date_inscription)");
    if($pdo_statement->execute( array( ':Nom'=>$name, ':email'=>$adresse_email,':langues'=>$langues,':date_inscription'=>$date_inscription))){
    // mail($to, $subject, $message, $headers);
        $msg = array(
            'msg' => 'email a ete bien envoyer'
        );
    }
    else{
        $msg = array(
            'msg' => 'Message non-envoyé!'
        );
    }
    
    echo json_encode($msg);  
    $message_sent = true;     
}
    
?>