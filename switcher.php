<?php
/**
 * @author Alf21
 * @info switcher.php is the background engine to handle multiple stylesheets with the help of cookies
 */

// SETTINGS
$domain = 'localhost:9998'; // domain address to verify cookies

// MECHANICS
if (!isset($_SERVER['HTTP_REFERER'])) // check whether page is not loaded manually
    exit;
    
if (empty($domain))
    $domain = $_SERVER['HTTP_HOST'];

$set = isset($_GET['set']) ? $_GET['set'] : "default"; // set default style if getter var is not set
    
if (!isset($_COOKIE['sitestyle'])) : // set cookie up
    setcookie('sitestyle', $set, time()+31536000, '/', $domain, '0');
else : // update cookie
    setcookie('sitestyle', $set);
endif;

header("Location: " . $_SERVER['HTTP_REFERER']); // redirect to previous page
?>