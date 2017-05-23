<?php 
/* Eleanor A. Boyd
WEB170
Project site:
    The Morrison Family Photo Gallery and Blog
© 2017, Eleanor A. Boyd, All Rights Reserved.

Don't steal my shit!
*/

//functions.php

//site keys for the server: eleanorboyd.com
$siteKey = "6LdFgAoUAAAAAFlH5ACIp95JLnzgeOU6kLzZDILN";
$secretKey = "6LdFgAoUAAAAADE5GQB4HJI9rT-_Pn6doIMLJPnH";

//avoid date errors
date_default_timezone_set('America/LosAngeles');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//switch statement - dynamic page titles
switch(THIS_PAGE){
    case 'index.php':
        $title = 'Home';
    break;

    case 'about':
        $title = 'About';
    break;

    case 'blog':
        $title = 'Blog';
    break;

    case 'contact':
        $title = 'Contact';
    break;

    case 'photos':
        $title = 'Photos';
    break;

    case 'sub-page-one':
        $title  = 'Sub-Page One';
    break;

    case 'sub-page-two':
        $title = 'Sub-Page Two';
    break;

    case 'sub-page-three':
        $title = 'Sub-Page Three';
    break;

    default:
        $title = THIS_PAGE;
}
//end switch statement

//begin register nav menus function
register_nav_menus(array('main-menu' => __('Main Menu'), 'secondary-menu' => __('Secondary Menu'),));



?>