<!DOCTYPE html SYSTEM "about:legacy-compat"> 
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="grant, burton, software, engineer, web, website, developer, design, internet, uni"> 
        <meta name="author" content="Grant R Burton" />
        <meta name="google-site-verification" content="8RblhpLkVAmN0BXAXePR8a3kQZZiM69lhCreQI5MQzY" />
        <title>Grant R Burton - Undergraduate Software Engineer</title>
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <!--[if lt IE 9]><script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body>
        <section id="wrapper">
            <header>
                <h1>GRANT R BURTON</h1>
            </header>
            <nav>
                <ul>
                    <?php
                    $pages = array(
                        'Home' => '/',
                        'Uni' => 'uc', /*uni*/
                        'Me' => 'uc', /*me*/
                        'Social' => 'uc', /*social*/
                        'Contact Me' => 'uc' /*contact*/
                    );
                    foreach ($pages as $text => $uri) {
                        echo '<li><a href="', $uri, '" title="', $text, '"', strpos($_SERVER['REQUEST_URI'], $uri) ? : '', '>', $text, '</a></li>';
                    }
                    ?>
                </ul>
            </nav>
