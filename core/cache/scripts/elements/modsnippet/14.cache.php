<?php  return 'function elements_modsnippet_14($scriptProperties= array()) {
global $modx;
if (is_array($scriptProperties)) {
extract($scriptProperties, EXTR_SKIP);
}
session_start();
if(!isset($_SESSION[\'modx_username\']))
{
    return "<p>Hello guest! (<a href=\'[[~2]]\' style=\'color:green\'>Login</a>)</p>";    
}else
{
    $username = $_SESSION[\'modx_username\'];
    return "<p>Hello ".$username."&nbsp;(<a href=\'[[~7]]\'style=\'color:green\'>Logout</a>)</p>";
}
}
';