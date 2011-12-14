<?php
//errors on
error_reporting(E_ALL | E_NOTICE);
ini_set('display_errors', 1);
if (isset($_POST['email'])) {

    $email_to = 'contact@grantrburton.co.uk';
    $email_subject = $_POST['subject'];

    function died($error) {
        // error code
        echo "<link href='css/style.css' rel='stylesheet' type='text/css' /> ";
        echo "There were error(s) found with the form your submitted.<br/> ";
        echo "These errors appear below.<br /><br />";
        echo $error . "<br /><br />";
        echo "Please click <a href='javascript:history.go(-1)'>here</a> to go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if (!isset($_POST['name']) ||
            !isset($_POST['subject']) ||
            !isset($_POST['email']) ||
            !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form your submitted.');
    }

    $name = $_POST['name']; // required
    //$subject = $_POST['subject']; // required
    $email_from = strtolower($_POST['email']); // required
    $message = $_POST['message']; // required
    $matches;

    $error_message = '';
    $email_exp = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    if (!preg_match_all($email_exp, $email_from, $matches)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    $string_exp = '/^[a-zA-Z .\'-]+$/';
    if (!preg_match_all($string_exp, $name, $matches)) {
        $error_message .= 'The name you entered does not appear to be valid.<br />';
    }
    if (!preg_match_all($string_exp, $email_subject, $matches)) {
        $error_message .= 'The subject you entered does not appear to be valid.<br />';
    }
    if (strlen($message) < 2) {
        $error_message .= 'The message you entered do not appear to be valid.<br />';
    }
    $string_exp = "^[0-9 .-]+$";
    
    

    if (strlen($error_message) > 0) {
        died($error_message);
    }
    $email_message = "";

    function clean_string($string) {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    //$email_message .= "Email: " . clean_string($email_from) . "\n";
    //$email_message .= "subject: " . clean_string($subject) . "\n";
    $email_message .= clean_string($message) . "\n\n";
    $email_message .= "Regards\n" . clean_string($name);

// create email headers
    $headers = 'From: ' . $email_from . "\r\n" .
            'Reply-To: ' . $email_from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    ?>

    <!-- success html here -->


    <!DOCTYPE html SYSTEM "about:legacy-compat"> 
    <html lang="en">
        <head>
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <meta name="keywords" content="grant, burton, software, engineer, web, website, developer, design, internet, uni"> 
            <meta name="author" content="Grant R Burton" />
            <meta name="google-site-verification" content="8RblhpLkVAmN0BXAXePR8a3kQZZiM69lhCreQI5MQzY" />
            <title>Grant R Burton - Undergraduate Software Engineer</title>
            <link rel="shortcut icon" href="images/favicon.ico"/>
            <link href="css/style.css" rel="stylesheet" type="text/css" />
            <!--[if lt IE 9]><script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        </head>
        <body>
            <section id="wrapper">
                <header>
                    <img src="images/header.png" width="800" height="82" alt="Grant R Burton - Undergraduate Software Engineer">
                </header>

                <nav> 
                    <ul> 
                        <li><a href="/" title="Home">Home</a></li> 

                        <li><a href="uni" title="Uni">Uni</a></li> 

                        <li><a href="social" title="Social">Social</a></li> 

                        <li><a href="contact" title="Contact Me" class="selected">Contact Me</a></li> 
                    </ul> 
                </nav> 

                <section id="content">
                    <aside id="bio">
                        <?php include ('includes/bio.php') ?>
                    </aside>

                    <section id="main">
                        <article>
                            You Message has been sent.<br/>
                            I will get back to you as soon as possible.<br/>
                            <?php include('includes/form.php'); ?>
                        </article>
                    </section>
                    <div style="clear: both;">&nbsp;</div>
                </section>
                <footer>
                    <p>Copyright &copy; <?php echo date('Y');?> Grant R Burton. Created by <a href="contact">Grant R Burton</a></p>
                </footer>
            </section>
        </body>
    </html>
    <?php
};