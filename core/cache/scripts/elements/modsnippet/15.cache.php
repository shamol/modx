<?php  return 'function elements_modsnippet_15($scriptProperties= array()) {
global $modx;
if (is_array($scriptProperties)) {
extract($scriptProperties, EXTR_SKIP);
}
session_start();
if(!isset($_SESSION[\'modx_username\']))
{
    $url = $modx->makeUrl(2, "", "", "full");
    $modx->sendRedirect($url);
}
}
';