 <?php
      if(isset($_POST['name'])){
          
       require_once('PHPMailer/PHPMailerAutoload.php');  
  
          console.log("hello");
        $_Name=$_POST['name'];
        $_Email=$_POST['email'];
         $_Phone=$_POST['phone'];
       $_Comments=$_POST['comments'];
        $_Captcha=$_POST['captcha'];
        
     

	$_Subject = "Contact us Form Details - ";
       


$html='<!DOCTYPE html>';
$html.='<html style="font-family:Helvetica Neue,Helvetica,Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">';
$html.='<head>';
$html.='<meta name="viewport" content="width=device-width">';
$html.='<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">';
$html.='<title>Really Simple HTML Email Template</title>';
$html.='</head>';
$html.='<body bgcolor="#f6f6f6" style="font-family:Helvetica Neue,Helvetica,Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; -webkit-font-smoothing: antialiased; height: 100%; -webkit-text-size-adjust: none; width: 100% !important; margin: 0; padding: 0;">';
$html.='<table class="body-wrap" bgcolor="#f6f6f6" style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding: 20px;"><tr style="font-family:Helvetica Neue,Helvetica,Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">';
$html.='<td style="font-family:Helvetica Neue,Helvetica,Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td>';
$html.='<td class="container" bgcolor="#FFFFFF" style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; clear: both !important; display: block !important; max-width: 600px !important; Margin: 0 auto; padding: 20px; border: 1px solid #f0f0f0;">';
$html.='<div class="content" style="font-family:Helvetica Neue,Helvetica,Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; display: block; max-width: 600px; margin: 0 auto; padding: 0;">';
$html.='<table style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding: 0;"><tr style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">';
$html.='<td style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">';
$html.='<p style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">Hi there,</p>';

$html.='<p style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">Name      : '.$_Name.'</p>';

$html.='<p style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">Email     : '.$_Email.'</p>';
$html.='<p style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">Phone no  : '.$_Phone.'</p>';


$html.='<p style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">Comments   : '.$_Comments.'</p>';
if(!empty($_Message)){
$html.='<p style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;">Comments   : '.$_Comments.'</p>';
}

$html.='</td>';
$html.='</tr></table>';
$html.='</div>';
$html.='</td>';
$html.='<td style="font-family:Helvetica Neue,Helvetica,Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td>';
$html.='</tr></table>';
$html.='<table class="footer-wrap" style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; clear: both !important; width: 100%; margin: 0; padding: 0;"><tr style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">';
$html.='<td style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td>';
$html.='<td class="container" style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; clear: both !important; display: block !important; max-width: 600px !important; margin: 0 auto; padding: 0;">';
$html.='<div class="content" style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; display: block; max-width: 600px; margin: 0 auto; padding: 0;">';
$html.='<table style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding: 0;"><tr style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">';
$html.='<td align="center" style="font-family:Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">';
$html.='</td>';
$html.='</tr></table>';
$html.='</div>';
$html.='</td>';
$html.='<td style="font-family: Helvetica Neue,Helvetica, Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td>';
$html.='</tr></table>';
$html.='</body>';
$html.='</html>';


        /* 
        $headers = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: $_Name < $_Email >" . "\r\n";
        $headers .= "X-Priority: 3\r\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
        
        
        //$headers .= 'Cc: myboss@example.com' . "\r\n";
        if (@mail($_To,$_Subject,$html,$headers,'-fpritchard')){
 	    $data['status'] = 'success';
            $data['message'] = '<span style="color:green;">Thank you for contacting us.  We will respond at our earliest opportunity.</span>';
        }
        else{
            $data['status'] = 'error';
            $data['message'] = '<span style="color:red;">Some error occurred please retry again later!..</span>';
        }
        */
        
        
        $_To = "govardhinicse@gmail.com";
        // $_To = "arockiasinc25@gmail.com";
         $_ToName = "Govardhini";
          
          //$BCC='arockiasinc30@gmail.com';
         $BCC='govardhinicse@gmail.com';
         $BCCName='Govardhini';
         
         
      
        $mail = new PHPMailer(); // defaults to using php "mail()"
        $mail->IsSendmail();
        
       
		
        $mail->SetFrom($_Email, $_Name);
        $mail->AddReplyTo($_Email,$_Name);
        
        $address = $_To;
        $mail->AddAddress($address, $_ToName);
        $mail->AddBCC($BCC,$BCCName);


        $mail->Subject    = $_Subject;
        $mail->MsgHTML($html);

if(!$mail->Send()) {
   $data['status'] = 'error';
  $data['message'] = $mail->ErrorInfo;    
  //echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  $data['message'] = '<span style="color:#6eb917;">Thank you for contacting us.  We will respond at our earliest opportunity.</span>';
}
        
        
        echo json_encode($data);

   }
   

?>