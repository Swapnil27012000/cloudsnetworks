<?php

$siteKey = '6LdN_MIqAAAAABRHixSxHDgipsBbFFRtA8JozaSH';
$secretKey  = '6LdN_MIqAAAAAGIhln9RN3OOkeS0AU3MheIyd_aY';

// Email settings 
$recipientEmail = 'business.cloudsnetworks@outlook.com';

// If the form is submitted 
$postData = $statusMsg = '';
$status = 'error';
if (isset($_POST['con_submit'])) {
    $postData = $_POST;

    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
        // Validate reCAPTCHA checkbox 
        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            // Verify the reCAPTCHA API response 
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);

            // Decode JSON data of API response 
            $responseData = json_decode($verifyResponse);
            if ($responseData->success) {
                // Retrieve value from the form input fields 
                $name = !empty($_POST['name']) ? $_POST['name'] : '';
                $email = !empty($_POST['email']) ? $_POST['email'] : '';
                $contact1 = !empty($_POST['phone']) ? $_POST['phone'] : '';
                $subject = !empty($_POST['subject']) ? $_POST['subject'] : '';
                $message = !empty($_POST['message']) ? $_POST['message'] : '';

                // date_default_timezone_set("Asia/Calcutta");
                // $timestamp = time();
                // $timestamp = date('Y-m-d H:i:s', $timestamp);


                // Send email notification to the site admin 
                $to = $recipientEmail;
                // $subject = 'New Contact Request Submitted';
                $htmlContent = " 
                    <h4>Contact request details</h4> 
                    <p><b>Name: </b>" . $name . "</p> 
                    <p><b>Email: </b>" . $email . "</p> 
                    <p><b>Contact: </b>" . $contact1 . "</p> 
                    <p><b>Subject: </b>" . $subject . "</p> 
                    <p><b>Message: </b>" . $message . "</p> 
                ";
                // Always set content-type when sending HTML email 
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                // More headers 
                $headers .= 'From:' . $name . ' <' . $email . '>' . "\r\n";


                // Send email 
                // if(mail($to, $subject, $htmlContent, $headers)){
                    ///
                    require __DIR__ . '/vendor/autoload.php';

                    $resend = Resend::client("re_M65Jr43T_97XsHQvSKYy1DXFEHDmvJP5W");
        
                    $resend->emails->send([
                    'from' => 'onboarding@resend.dev',
                    'to' => $recipientEmail,
                    'subject' => $subject,
                    'html' => '<p><strong>'.$message.'</strong>!<br>
                    '.$message.'</p>'
                    ]);
        
                    ///
                    // $status = 'success';
                    $statusMsg = 'Thank you! Your contact request has been submitted successfully.';
                    // $postData = '';
                    print '<script>alert("Thank you! Your contact request has been submitted successfully.")</script>';
                    print '<script>top.location = "index.html";</script>';

                // }

                
            } else {
                $statusMsg = 'Robot verification failed, please try again.';
                print '<script>alert("Robot verification failed, please try again.")</script>';
                print '<script>top.location = "index.html";</script>';
            }
        } else {
            $statusMsg = 'Please check the reCAPTCHA checkbox.';

            print '<script>alert("Please check the reCAPTCHA checkbox")</script>';
            print '<script>top.location = "index.html";</script>';
        }
    } else {
        $statusMsg = 'Please fill all the mandatory fields.';
        print '<script>alert("Please fill all the mandatory fields.")</script>';
        print '<script>top.location = "index.html";</script>';
    }
}
