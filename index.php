<?php

    require 'controller/getPath.php'; 
    //exit;
    // Grabs the URI and breaks it apart in case we have querystring stuff
    $request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
    $uri = explode("/", $request_uri[1]);

    // set a session variable which will be used on the master page to 
    // pull the right components from the views folder

    $_SESSION['whichPage']=$uri[0];

    $requestIP = $_SERVER['REMOTE_ADDR'];
    $HTTPX = $_SERVER['HTTP_X_FORWARDED_FOR'];
    $HTTP_CLIENT = $_SERVER['HTTP_CLIENT_IP'];

    //echo('REMOTE_ADDR = ' . $requestIP . '<br/>');
    //echo('HTTP_X_FORWARDED_FOR = ' . $HTTPX . '<br/>');
    //echo('HTTP_CLIENT_IP = ' . $HTTP_CLIENT);
    echo get_current_user();
    exit; 

    // switch statement based on the value of the uri grabbed above.
    switch ($uri[0]) {
        // Call the home page with no page name in the url
        case '':
            require 'views/master.php';
            break;
        // Home page
        case 'home':
            require 'views/master.php';
            break;
        // firstPage page
        case 'firstPage':
            require 'views/master.php';
            break;
        // contact page
        case 'contact':
            require 'views/master.php';
            break;
        // help page
        case 'help':
            require 'views/master.php';
            break;
        // handle any thing that is entered in the url which isn't above
        default:
            header('HTTP/1.0 404 Not Found');
            $_SESSION['whichPage']= 'error';
            require 'views/master.php';
            break;
    }
    
?> 