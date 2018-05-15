<?php
require('constants.php');

class m{
private $con;
public function __construct(){
  $this->connectdb();
}

public function connectdb(){
GLOBAL $DBSERVER,$DBUSER,$DBPASSWORD,$DBNAME;
  $this->con = mysqli_connect($DBSERVER,$DBUSER,$DBPASSWORD,$DBNAME);
    if(mysqli_connect_errno()){
      die('DATEBASE CONNECTION FAILED'); // no point showing the other webpages when database connection is failed.
    }else{
    
    }
}

public function entermail(){
  $Fullname = htmlspecialchars($_POST['yourname']);
  $Subj = htmlspecialchars($_POST['Subject']);
  $email = htmlspecialchars($_POST['Email']);
  $message = htmlspecialchars($_POST['Message']);
if($stmt = $this->con->prepare("INSERT INTO etext(name,subject,mails,message) VALUES(?,?,?,?)")){
  $stmt->bind_param('ssss',$Fullname,$Subj,$email,$message);

  if($stmt->execute()){
        $to = 'bereikmedia@gmail.com';
        $subject = $Subj;
        $body = $message;
        $header = 'From: '.$email;
        if(mail($to,$subject,$body,$header)){
          echo'Thanks For Contacting Us.We will be in touch with you soon';
        }
          else{
            echo "Sorry,an Error occured,Pls try again later";
          }
        }
      else{
          echo "Sorry,an Error occured,Pls try again later";
      }

  }

}
  
}
$classobj = new m;

?>