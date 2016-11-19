<?php
/**
 * @author Alf21
 * @info header.php is the header file you need to include into every '<head>' part of your .php files you want to handle multiple styles
 */

include("cookie_functions.php");
$sitestyle = (cookiesEnabled() && isset($_COOKIE["sitestyle"])) ? $sitestyle = $_COOKIE["sitestyle"] : $sitestyle = "default";
?>
<link rel="stylesheet" type="text/css" media="screen" title="User Defined Style" href="css/<?php echo $sitestyle; ?>.css" />
<style rel="stylesheet" type="text/css">
.colorChanger_Container {
    width: 10px; 
    height: 10px;
    /*float: left;*/ 
    display: inline-block;
    margin-top: 5px; 
    margin-right: 5px;
}
</style>