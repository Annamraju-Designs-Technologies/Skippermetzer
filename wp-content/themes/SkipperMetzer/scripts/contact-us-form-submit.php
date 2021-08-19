<?php
$success_message='';
$error_url='/error/';
$success_url='Thank You';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //error_log('send email run');
    $postObject=(object)[
       "name"=>$_POST['name'],
           "email"=>$_POST['email'],
           "phoneno"=>$_POST['phoneno'],
           "message"=>$_POST['message'],
           "Url"=>$_SERVER['HTTP_REFERER'],
    ];
    $email_body='A form has been filled up on contact us page. The details are as follows: 
    <ul>
   <li>name: '.$postObject->name.'</li>
        <li>email: '.$postObject->email.'</li>
            <li>phoneno: '.$postObject->phoneno.'</li>
                <li>message: '.$postObject->message.'</li>
                <li>Url: '.$postObject->Url.'</li>  
                    
</ul>';
    include_once ($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/Skippermetzer/scripts/email-configuration.php');
    $mail->ClearAllRecipients( ); // clear all
    // $mail->addAddress('customercare@skippermetzer.com','Skipper Metzer');     // Add a recipient
    $mail->addAddress('dipak.anand18s@gmail.com','Destiny Farms LLP');     // Add a recipient
    // $mail->AddCC('dipak.anand18s@gmail.com');   //CC  
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact Us Form Submission';
    $mail->Body    = $email_body;
    $mail->AltBody = 'Alt body';
    if(!$mail->send()) {
        error_log('email not sent');
        $success_message="There was some error in processing your request";
        error_log( 'Mailer Error: ' . $mail->ErrorInfo);
        //echo "<script type='text/javascript'> document.location = '".$error_url."'</script>";
    } else {
        error_log('email sent successfully');
        $success_message="Your form has been submitted successfully.";
        echo $success_url;
    }
}
?>