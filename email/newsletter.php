<?php

// newsemail settings 
$recipientEmail = 'business.cloudsnetworks@outlook.com';

// If the form is submitted 
$postData = $statusMsg = '';
$status = 'error';
if (isset($_POST['newslettersubmit'])) {
    $postData = $_POST;

    if (!empty($_POST['newsemail'])) {
        
                // Retrieve value from the form input fields 
               
                $newsemail = !empty($_POST['newsemail']) ? $_POST['newsemail'] : '';
                

                // date_default_timezone_set("Asia/Calcutta");
                // $timestamp = time();
                // $timestamp = date('Y-m-d H:i:s', $timestamp);


                // Send newsemail notification to the site admin 
                $to = $recipientEmail;
                $subject = 'Subscribe Newsletter';
                $htmlContent = " 
                    <h4>Subscribe Newsletter</h4>
                    <p>Hey Swapnil,</p> 
                    <p><b>Email: " . $newsemail . "</b> Subscribe Your Newsletter...</p> 
                    
                ";
                
                $headers = 'From: '. $newsemail ;

                
                    require __DIR__ . '/vendor/autoload.php';

                    $resend = Resend::client("re_M65Jr43T_97XsHQvSKYy1DXFEHDmvJP5W");
        
                    $resend->emails->send([
                    'from' => 'onboarding@resend.dev',
                    'to' => $recipientEmail,
                    'subject' => $subject,
                    'html' => '<p>
                    <strong> New Contact '.$headers.'</strong>!<br>
                    '.$htmlContent.'
                    </p>'
                    ]);
        
                    ///
                    
                    print '<script>alert("Thank you! Newsletter Subscribe Successfully.")</script>';
                    print '<script>top.location = "../index.html";</script>';

                
                
            
    } else {
        $statusMsg = 'Please fill all the mandatory fields.';
        print '<script>alert("Please fill all the mandatory fields.")</script>';
        print '<script>top.location = "index.html";</script>';
    }
}
