<?php
/**
 * @author Alf21
 * @info cookie_functions.php contains cookie functions coded to handle cookies faster & easier
 */
 
function cookiesEnabled() {
    $enabled = false;

    setcookie("test_cookie", "test", time() + 3600, '/'); // set test cookie
    
    if (count($_COOKIE) > 0) // check whether cookies are enabled (test cookie was able to set)
        $enabled = true;
    
    if ($enabled)
        setcookie("test_cookie", "test", time() - 3600);  // remove test cookie
    
    return $enabled;
}

function colorChanger($color, $css_color) {
    $container = '<div class="colorChanger_Container" style="background-color: ' . $css_color . ';"></div>';
    echo '<a href="http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'switcher.php?set=' . $color . '">' . $container . '</a>';
    return;
}
?>