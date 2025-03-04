<?php
ini_set("display_errors", 0);

require_once __DIR__ . '../vendor/autoload.php'; // Autoload Composer
// Load .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// SocialMedia
$youtube_url = $_ENV['YT_URL'];
$instagram_url = $_ENV['INSTA_URL'];
$x_url = $_ENV['X_URL'];
$linkedin_url = $_ENV['LINK_URL'];

$address_url = $_ENV['ADDRESS_URL'];
$address_link = $_ENV['ADDRESS_LINK'];


// Google reCAPTCHA
$siteKey = $_ENV['SITE_KEY'];
$secretKey = $_ENV['SECRET_KEY'];

// Email 
$recipientEmail = $_ENV['RECIPIENT_EMAIL'];
$from_email = $_ENV['FROM_EMAIL'];
$Contact_Email = $_ENV['CONTACT_EMAIL'];

// Resend
$resend_key = $_ENV['RESEND_API'];

// Access variables
$dbHost = $_ENV['DB_HOST'];
$dbuser = $_ENV['DB_USER'];
$dbpass = $_ENV['DB_PASSWORD'];
$dbName = $_ENV['DB_NAME'];

// Check Connection
$con = mysqli_connect($dbHost, $dbuser, $dbpass, $dbName);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }

function set_marathi_sql_config($con)
{
    mysqli_query($con, 'SET character_set_results=utf8');
    // mysqli_query($con, 'SET names=utf8');
    mysqli_query($con, 'SET character_set_client=utf8');
    mysqli_query($con, 'SET character_set_connection=utf8');
    mysqli_query($con, 'SET collation_connection=utf8_general_ci');
    mysqli_set_charset($con, 'utf8');

}
  
  // $key = "G-JKDTGNBL24";
?>