<?php

// créé une première CLASSE :
class ContactForm{

    // déclarer les variables
    private $nomPrenom;
    private $email;
    private $sujet;
    private $message;

    // créé une fonction 
    public function insertMessage($nomPrenom, $email, $sujet, $message){
        // récupère les saisies de
        $this->nomPrenom = strip_tags($nomPrenom);
        $this->email = strip_tags($email);
        $this->sujet = strip_tags($sujet);
        $this->message = strip_tags($message);

        // connecte à la DB
        require('assets/config/configDB.php');

        $prepareReq = $pdo->prepare("INSERT INTO contactform(nomPrenom, email, sujet, message, mdate) VALUES(:nomPrenom, :email, :sujet, :message, now())");

        /* $prepareReq->bindparam(':nomPrenom', $_POST['nomPrenom']);
        $prepareReq->bindparam(':email', $_POST['email']);
        $prepareReq->bindparam(':sujet', $_POST['sujet']);
        $prepareReq->bindparam(':message', $_POST['message']);
        // $prepareReq->bindparam('mdate', $_POST['mdate']); */

        $prepareReq->execute([
            ':nomPrenom' => $this->nomPrenom,
            ':email'     => $this->email,
            ':sujet'     => $this->sujet,
            ':message'   => $this->message            
        ]);


        $prepareReq->closeCursor();        
        
    } // end of function "insertMessage"

    // function pour recoua un email
    public function sendEmail($sujet, $email, $message) {
          $this->to = 'sabujbaruaraj@gmail.com';
          $this->email = strip_tags($email);
          $this->sujet = strip_tags($sujet);
          $this->message = strip_tags($message);
          $this->headers = 'De : ' . $this->email . "\r\n"; // retours à la ligne
          $this->headers .= 'MIME-version: 1.0' . "\r\n";
          $this->headers .= 'Content-type : text/html; charset=utf-8' . "\r\n";

          // enfin, on utilise la fonction prédéfinie mail() de PHP
          mail($this->to, $this->sujet, $this->message, $this->headers);
     }



} // fin de "class ContactForm"




if($_POST){
    $success = '';
    extract($_POST);


    // if(!isset($nomPrenom) || strlen($nomPrenom) < 3 || strlen($nomPrenom) > 20) $errNP = 'Indiquez votre nom & prenom !';
    // if(!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errEmail = 'Entrez un mail qui est valide, merci !';
    // if(!isset($sujet) || strlen($sujet) < 10 || strlen($sujet) > 50) $errSujet = 'Indiquez votre sujet !';
    // if(!isset($message) || strlen($message) < 10) $errMessage = 'Ecrivez votre message !';


    $valid = (empty($nomPrenom) || strlen($nomPrenom) < 3 || strlen($nomPrenom) > 20) || (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) || (empty($sujet) || strlen($sujet) < 10 || strlen($sujet) > 50) || (empty($message) || strlen($message) < 10) ? false : true;

    $errNP = (empty($nomPrenom) || strlen($nomPrenom) < 3 || strlen($nomPrenom) > 20) ? 'Indiquez votre nom & prenom !' : NULL;
    $errEmail = (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) ? 'Entrez un mail qui est valide, merci !' : NULL;
    $errSujet = (empty($sujet) || strlen($sujet) < 10 || strlen($sujet) > 50) ? 'Indiquez votre sujet !' : NULL;
    $errMessage = (empty($message) || strlen($message) < 10) ? 'Ecrivez votre message !' : NULL;

    if($valid){

        $contact = new ContactForm;
    
        $contact->insertMessage($nomPrenom, $email, $sujet, $message);

        // remove ou unset les valeurs de formulaire : 
        unset($nomPrenom);
        unset($email);
        unset($sujet);
        unset($message);
        unset($contact);

        $success .= 'Votre Message est bien envoyé !';
    }

}